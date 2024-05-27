<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallProductMigration extends Command
{
    protected $signature = 'install:product-migration';

    protected $description = 'Instala la migración para la tabla productos';

    public function handle()
    {
        $migration = '2024_05_22_050607_create_productos_table';
        $path = base_path("app/Modules/Productos/migrations/{$migration}.php");

        if (file_exists($path)) {
            $this->info("Ejecutando la migración: {$migration}");
            Artisan::call('migrate', [
                '--path' => "app/Modules/Productos/migrations/{$migration}.php",
            ]);
            $this->info('Migración completada exitosamente.');
        } else {
            $this->error("El archivo de migración '{$migration}' no existe.");
        }
    }
}
