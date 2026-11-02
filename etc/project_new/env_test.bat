@echo off
setlocal
powershell.exe -NoLogo -NoProfile -ExecutionPolicy Bypass -File "%~dp0env_cambiar.ps1" -Entorno test
set "resultado=%errorlevel%"
echo.
pause
exit /b %resultado%
