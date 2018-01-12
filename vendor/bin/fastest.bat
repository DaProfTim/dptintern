@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../liuggio/fastest/fastest
php "%BIN_TARGET%" %*
