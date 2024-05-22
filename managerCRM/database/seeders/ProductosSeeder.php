<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
 {

    public function run()
 {
        // Registros a insertar, omitiendo los duplicados
        $productos = [
            [ 1, "TRIGO", 1 ],
            [ 2, "MAIZ", 1 ],
            [ 3, "LINO", 0 ],
            [ 4, "GIRASOL", 1 ],
            [ 5, "SORGO", 1 ],
            [ 6, "SOJA", 1 ],
            [ 7, "AVENA", 0 ],
            [ 8, "ALPISTE", 0 ],
            [ 9, "MIJO", 0 ],
            [ 10, "CENTENO", 0 ],
            [ 11, "CEBADA FORRAJERA", 1 ],
            [ 12, "TRIGO CANDEAL", 0 ],
            [ 13, "COLZA", 0 ],
            [ 14, "MANI", 0 ],
            [ 15, "ITA", 0 ],
            [ 18, "SORGO FORRAJERO", 0 ],
            [ 19, "PELLETS DE SOJA", 0 ],
            [ 20, "TRIGO SARRACENO", 0 ],
            [ 21, "SOJA SUSTENTABLE", 0 ],
            [ 23, "AGROPIRO ALARGADO", 0 ],
            [ 24, "ALFALFA", 0 ],
            [ 28, "FESTUCA ALTA", 0 ],
            [ 36, "SOJA FABRICA", 0 ],
            [ 37, "SOJA FABRICA ENTREGA", 0 ],
            [ 39, "SEMILLA DE AVENA", 0 ],
            [ 40, "SEMILLA DE TRIGO", 0 ],
            [ 41, "SEMILLA DE MAIZ", 0 ],
            [ 42, "SEMILLA DE SOJA", 0 ],
            [ 43, "SEMILLA DE GIRASOL", 0 ],
            [ 45, "SEMILLA NATURAL GIRASOL", 0 ],
            [ 46, "SEMILLA MACHO GIRASOL", 0 ],
            [ 49, "MAIZ DENTADO", 0 ],
            [ 50, "PELLETS DE GIRASOL", 0 ],
            [ 51, "PELLETS DE AFRECHILLO", 0 ],
            [ 52, "MOHA CARAPE", 0 ],
            [ 53, "CEBADA CERVECERA", 1 ],
            [ 54, "COLZA DOBLE '00' / CANOLA", 0 ],
            [ 56, "MAIZ BLANCO", 0 ],
            [ 58, "MANI CAJA", 0 ],
            [ 59, "MAIZ ESPECIAL", 0 ],
            [ 60, "MAIZ FLAMENCO", 0 ],
            [ 65, "MAIZ PISCINGALLO", 0 ],
            [ 66, "MAIZ DURO COLORADO", 0 ],
            [ 67, "MAIZ CARGILL 280", 0 ],
            [ 68, "ARROZ", 0 ],
            [ 69, "MANI INDUSTRIA", 0 ],
            [ 70, "SOJA CHICAGO", 0 ],
            [ 71, "TRIGO CHICAGO", 0 ],
            [ 72, "MAIZ CHICAGO", 0 ],
            [ 74, "SEMILLA DE CEBADA SCARLETT", 0 ],
            [ 75, "MAIZ PARTIDO", 0 ]
        ];

        // Insertar registros
        foreach ( $productos as $producto ) {
            DB::table( 'productos' )->insert( [
                'id' => $producto[ 0 ],
                'nombre' => $producto[ 1 ],
                'usoFrecuente' => $producto[ 2 ], // Puedes ajustar esto según tus necesidades
                'created_at' => now(),
                'updated_at' => now(),
            ] );
        }

    }
}
