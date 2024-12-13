@echo off
setlocal

REM Prompt for XAMPP installation path X:\IDE\xamapp
set /p xamppPath=Please enter the XAMPP installation path (e.g., C:\xampp):

if not exist "%xamppPath%\xampp-control.exe" (
    echo Invalid XAMPP path. Please check the path and try again.
    pause
    exit /b
)

echo XAMPP path found: %xamppPath%

REM Navigate to htdocs directory
cd /d "%xamppPath%\htdocs"

REM Check if the webdb_hw directory exists
if exist "webdb" (
    echo The webdb directory already exists. Skipping Git clone.
) else (
    REM Clone Git repository if it doesn't exist
    echo Cloning Git repository...
    git clone git@github.com:XDeadlocked/webdb.git

    if errorlevel 1 (
        echo Git clone failed. Please check your SSH key configuration.
        pause
        exit /b
    )
)
cd webdb\advanced

REM Run php init 0 command and choose development mode
echo Initializing PHP project...
php init

if errorlevel 1 (
    echo PHP initialization failed. Please check your PHP configuration.
    pause
    exit /b
)

@echo off
REM MySQL configuration parameters
set MYSQL_HOST=localhost
set MYSQL_PORT=3306
set MYSQL_USER=root
set MYSQL_PASSWORD=
set SQL_FILE=%xamppPath%\htdocs\webdb\data\homework.sql
set DB_NAME=homework

REM Check if the SQL file exists
if not exist "%SQL_FILE%" (
    echo SQL file "%SQL_FILE%" does not exist. Please check the path.
    pause
    exit /b
)

REM Prompt the user to confirm the operation
echo About to create database: %DB_NAME% and import SQL file: %SQL_FILE%
echo To MySQL host: %MYSQL_HOST%:%MYSQL_PORT%
echo Using username: %MYSQL_USER%
echo.
set /p CONTINUE=Proceed with the operation? (Y/N): 
if /I "%CONTINUE%" neq "Y" (
    echo Operation cancelled.
    pause
    exit /b
)

REM Create the database
echo Creating database %DB_NAME%...
mysql -h%MYSQL_HOST% -P%MYSQL_PORT% -u%MYSQL_USER% -p%MYSQL_PASSWORD% -e "CREATE DATABASE IF NOT EXISTS %DB_NAME%;"

if %ERRORLEVEL% equ 0 (
    echo Database %DB_NAME% created successfully!
) else (
    echo Failed to create database %DB_NAME%. Please check the MySQL configuration.
    pause
    exit /b
)

REM Import the SQL file into the created database
echo Importing SQL file into database %DB_NAME%, please wait...
mysql -h%MYSQL_HOST% -P%MYSQL_PORT% -u%MYSQL_USER% -p%MYSQL_PASSWORD% %DB_NAME% < "%SQL_FILE%"

if %ERRORLEVEL% equ 0 (
    echo SQL file imported successfully into database %DB_NAME%!
) else (
    echo SQL file import failed. Please check the MySQL configuration and SQL file content.
)



yii.bat migrate

echo All steps completed successfully!
pause
