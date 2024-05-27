<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallPosicionesMigration extends Command
{
    protected $signature = 'install:posiciones-migration';

    protected $description = 'Instala la migración para la tabla posicionos';

    public function handle()
    {
        $migration = '2024_05_22_190850_create_posiciones_table';
        $path = base_path("app/Modules/Posiciones/migrations/{$migration}.php");

        if (file_exists($path)) {
            $this->info("Ejecutando la migración: {$migration}");
            Artisan::call('migrate', [
                '--path' => "app/Modules/Posiciones/migrations/{$migration}.php",
            ]);
            $this->info('Migración completada exitosamente.');
        } else {
            $this->error("El archivo de migración '{$migration}' no existe.");
        }
    }
}
