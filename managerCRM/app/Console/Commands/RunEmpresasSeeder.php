<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunEmpresasSeeder extends Command
{
    protected $signature = 'seed:empresas';
    protected $description = 'Ejecuta el seeder EmpresasTableSeeder';

    public function handle()
    {
        $seeder = 'App\Modules\Empresas\Seeders\EmpresasTableSeeder';

        $this->info("Ejecutando el seeder: {$seeder}");
        Artisan::call('db:seed', ['--class' => $seeder]);
        $this->info('Seeder completado exitosamente.');
    }
}
