# Cambio de entorno [/env_cambiar.ps1]
# Descripcion: sincroniza las asignaciones PHP, JS y Sass sin compilar ni subir archivos.
param(
    [Parameter(Mandatory = $true)]
    [ValidateSet('produccion', 'stage', 'test')]
    [string]$Entorno
)

$ErrorActionPreference = 'Stop'

try {
    $rutas = @{ produccion = ''; stage = '/stage'; test = '/test' }
    $ruta = $rutas[$Entorno]
    $archivo_sass = Join-Path $PSScriptRoot 'etc/css/custom/var/_env_var.scss'
    $directorio_src = Join-Path $PSScriptRoot 'src'
    if (!(Test-Path -LiteralPath $directorio_src -PathType Container) -or
        !(Test-Path -LiteralPath $archivo_sass -PathType Leaf)) {
        throw 'Se necesitan src/ y etc/css/custom/var/_env_var.scss junto a los scripts.'
    }

    # Git respeta .gitignore e incluye archivos nuevos, sin leer secretos ni bibliotecas ignoradas.
    $null = Get-Command git -ErrorAction Stop
    $raiz_git = & git -C $PSScriptRoot rev-parse --show-toplevel
    if ($LASTEXITCODE -ne 0 -or
        [IO.Path]::GetFullPath($raiz_git).TrimEnd('\', '/') -ne $PSScriptRoot.TrimEnd('\', '/')) {
        throw 'Los scripts deben estar en la raiz del repositorio Git.'
    }
    $lista_json = & git -C $PSScriptRoot -c core.quotePath=true ls-files --cached --others --exclude-standard -- src/
    if ($LASTEXITCODE -ne 0) { throw 'No se pudo obtener la lista de archivos PHP y JS.' }
    $archivos_fuente = @($lista_json | ForEach-Object {
        $nombre = $_
        if ($nombre.StartsWith('"')) { $nombre = ConvertFrom-Json $nombre }
        if (($nombre.EndsWith('.php') -or ($nombre.StartsWith('src/js/') -and $nombre.EndsWith('.js'))) -and
            $nombre -notmatch '(^|/)(-[^/]*|_ignored|PHPMailer)(/|$)' -and
            $nombre -notmatch '(^|/)([^/]*\.min\.js|modernizr2\.8\.3\.js)$' -and
            $nombre -ne 'src/var/secrets.var.inc.php') {
            Join-Path $PSScriptRoot $nombre
        }
    } | Sort-Object -Unique)

    # La codificacion Latin-1 permite sustituir solo ASCII conservando los demas bytes,
    # incluida la marca BOM, los acentos y los saltos de linea originales.
    $codificacion = [Text.Encoding]::GetEncoding(28591)
    $cambios = New-Object System.Collections.Generic.List[object]
    $patron_php = [regex]'(?m)^(?<inicio>[\t ]*\$dir_env[\t ]*=[\t ]*)(?<comilla>[''"])[^''"\r\n]*\k<comilla>(?<fin>[\t ]*;)'
    $patron_js = [regex]'(?m)^(?<inicio>[\t ]*var[\t ]+dir_env_js[\t ]*=[\t ]*)(?<comilla>[''"])[^''"\r\n]*\k<comilla>(?<fin>[\t ]*;)'
    $patron_asset = [regex]'(?m)^(?<inicio>[\t ]*function[\t ]+asset_versioned\s*\(\s*string\s+\$path\s*,\s*string\s+\$dir_env\s*=\s*)(?<comilla>[''"])[^''"\r\n]*\k<comilla>(?<fin>\s*,)'
    $cantidad_php = 0
    $cantidad_js = 0
    foreach ($archivo in $archivos_fuente) {
        $contenido = [IO.File]::ReadAllText($archivo, $codificacion)
        $patron = $patron_php
        if ([IO.Path]::GetExtension($archivo) -eq '.js') {
            $patron = $patron_js
        } elseif ($archivo -eq (Join-Path $directorio_src 'common/asset.filemtime.inc.php')) {
            $patron = $patron_asset
            if ($patron.Matches($contenido).Count -ne 1) {
                throw 'No se encontro el parametro $dir_env de asset_versioned().'
            }
        }
        if (!$patron.IsMatch($contenido)) { continue }
        if ([IO.Path]::GetExtension($archivo) -eq '.js') { $cantidad_js++ } else { $cantidad_php++ }
        $nuevo = $patron.Replace($contenido, {
            param($coincidencia)
            $coincidencia.Groups['inicio'].Value + "'" + $ruta + "'" + $coincidencia.Groups['fin'].Value
        })
        if ($nuevo -cne $contenido) {
            $cambios.Add(@{ Archivo = $archivo; Contenido = $nuevo })
        }
    }
    if ($cantidad_php -eq 0) { throw 'No se encontraron asignaciones de $dir_env en PHP.' }

    $contenido_sass = [IO.File]::ReadAllText($archivo_sass, $codificacion)
    $patron_seleccion = [regex]'(?m)^(?<inicio>[\t ]*\$dir_env[\t ]*:[\t ]*)[^;\r\n]+;'
    $patron_destino = [regex]('(?m)^(?<inicio>[\t ]*\$dir_env-' + $Entorno + '[\t ]*:[\t ]*)(?<comilla>[''"])[^''"\r\n]*\k<comilla>(?<fin>[\t ]*;)')
    if ($patron_seleccion.Matches($contenido_sass).Count -ne 1 -or
        $patron_destino.Matches($contenido_sass).Count -ne 1) {
        throw 'Sass debe tener una seleccion $dir_env y una definicion del entorno de destino.'
    }
    $nuevo_sass = $patron_destino.Replace($contenido_sass, {
        param($coincidencia)
        $coincidencia.Groups['inicio'].Value + '"' + $ruta + '"' + $coincidencia.Groups['fin'].Value
    })
    $nuevo_sass = $patron_seleccion.Replace($nuevo_sass, {
        param($coincidencia)
        $coincidencia.Groups['inicio'].Value + '$dir_env-' + $Entorno + ';'
    })
    if ($nuevo_sass -cne $contenido_sass) {
        $cambios.Add(@{ Archivo = $archivo_sass; Contenido = $nuevo_sass })
    }

    # Validar PHP, JS y Sass antes de escribir; no modificar archivos que ya coinciden.
    foreach ($cambio in $cambios) {
        [IO.File]::WriteAllText($cambio.Archivo, $cambio.Contenido, $codificacion)
        Write-Host ('Actualizado: ' + $cambio.Archivo.Substring($PSScriptRoot.Length + 1))
    }
    Write-Host ("Entorno: {0}. Ruta: '{1}'. PHP revisados: {2}. JS revisados: {3}. Archivos modificados: {4}." -f $Entorno, $ruta, $cantidad_php, $cantidad_js, $cambios.Count)
    Write-Host 'Compila los estilos antes de subir el contenido de src/ al servidor.'
    exit 0
} catch {
    Write-Host ('ERROR: ' + $_.Exception.Message) -ForegroundColor Red
    exit 1
}
