<?php

namespace App\Modules\Posiciones\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosicionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generar datos de posiciones ficticias
        $posiciones = [];
        $empresasIds = range(1, 7); // IDs de empresas (asumimos que hay 7 empresas)
        $productosIds = range(1, 10); // IDs de productos (asumimos que hay 10 productos)

        for ($i = 0; $i < 20; $i++) { // Crear 20 posiciones ficticias
            $posiciones[] = [
                'idEmpresa' => $empresasIds[array_rand($empresasIds)],
                'idProducto' => $productosIds[array_rand($productosIds)],
                'fechaEntregaInicio' => Carbon::now()->addDays(rand(1, 30)), // Fecha de entrega aleatoria entre 1 y 30 días desde hoy
                'moneda' => 'USD', // Moneda ficticia
                'precio' => rand(100, 1000), // Precio aleatorio entre 100 y 1000
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        // Insertar los datos de posiciones ficticias en la base de datos
        DB::table('posiciones')->insert($posiciones);
    }
}
