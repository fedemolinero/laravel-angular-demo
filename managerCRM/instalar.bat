C:\xampp\mysql\bin\mysql -u root -e "CREATE DATABASE manager;";
C:\xampp\php\php.exe artisan install:product-migration
C:\xampp\php\php.exe artisan install:empresas-migration
C:\xampp\php\php.exe artisan install:posiciones-migration
C:\xampp\php\php.exe artisan seed:productos
C:\xampp\php\php.exe artisan seed:empresas
C:\xampp\php\php.exe artisan seed:posiciones
C:\xampp\php\php.exe artisan serve
