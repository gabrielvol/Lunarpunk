@echo off
setlocal
powershell.exe -NoLogo -NoProfile -ExecutionPolicy Bypass -File "%~dp0env_cambiar.ps1" -Entorno produccion
set "resultado=%errorlevel%"
echo.
pause
exit /b %resultado%
