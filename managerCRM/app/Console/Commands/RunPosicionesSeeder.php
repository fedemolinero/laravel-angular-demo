<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunPosicionesSeeder extends Command
{
    protected $signature = 'seed:posiciones';
    protected $description = 'Ejecuta el seeder PosicionesTableSeeder';

    public function handle()
    {
        $seeder = 'App\Modules\Posiciones\Seeders\PosicionesTableSeeder';

        $this->info("Ejecutando el seeder: {$seeder}");
        Artisan::call('db:seed', ['--class' => $seeder]);
        $this->info('Seeder completado exitosamente.');
    }
}
