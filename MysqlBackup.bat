@echo off
For /f "tokens=2-4 delims=/ " %%a in ('date /t') do (set mydate=%%c-%%a-%%b)
For /f "tokens=1-2 delims=/:" %%a in ("%TIME%") do (set mytime=%%a%%b)

SET backupdir=C:\xampp\htdocs\COC\sql
SET mysqluername=root
SET mysqlpassword=Cladtek@2020
SET database=coc

C:\xampp\mysql\bin\mysqldump.exe -uroot -p%mysqlpassword% %database% > %backupdir%\%database%_%mydate%_%mytime%_.sql