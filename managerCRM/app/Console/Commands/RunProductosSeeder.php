<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunProductosSeeder extends Command
{
    protected $signature = 'seed:productos';
    protected $description = 'Ejecuta el seeder ProductosSeeder';

    public function handle()
    {
        $seeder = 'App\Modules\Productos\Seeders\ProductosSeeder';

        $this->info("Ejecutando el seeder: {$seeder}");
        Artisan::call('db:seed', ['--class' => $seeder]);
        $this->info('Seeder completado exitosamente.');
    }
}
