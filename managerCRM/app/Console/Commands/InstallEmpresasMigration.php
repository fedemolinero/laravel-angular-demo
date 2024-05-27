<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InstallEmpresasMigration extends Command
{
    protected $signature = 'install:empresas-migration';
    protected $description = 'Instala la migración para la tabla empresasos';

    public function handle()
    {
        $migration = '2024_05_22_190200_create_empresas_table';
        $path = base_path("app/Modules/Empresas/migrations/{$migration}.php");

        if (file_exists($path)) {
            $this->info("Ejecutando la migración: {$migration}");
            Artisan::call('migrate', [
                '--path' => "app/Modules/Empresas/migrations/{$migration}.php",
            ]);
            $this->info('Migración completada exitosamente.');
        } else {
            $this->error("El archivo de migración '{$migration}' no existe.");
        }
    }
}
