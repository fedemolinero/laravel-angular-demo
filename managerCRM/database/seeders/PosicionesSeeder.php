<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PosicionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Datos de ejemplo para las posiciones
        $posiciones = [
            [
                'idEmpresa' => 1,
                'idProducto' => 1,
                'fechaEntregaInicio' => Carbon::now()->subDays(10),
                'moneda' => 'USD',
                'precio' => 100.50,
            ],
            [
                'idEmpresa' => 2,
                'idProducto' => 2,
                'fechaEntregaInicio' => Carbon::now()->subDays(5),
                'moneda' => 'USD',
                'precio' => 85.75,
            ],
            // Agrega más datos aquí según sea necesario
        ];

        // Insertar los datos en la tabla
        foreach ($posiciones as $posicion) {
            DB::table('posiciones')->insert($posicion);
        }
    }
}
