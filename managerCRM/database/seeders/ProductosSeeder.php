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
            [ 1, 'TRIGO' ],
            [ 2, 'MAIZ' ],
            [ 3, 'LINO' ],
            [ 4, 'GIRASOL' ],
            [ 5, 'SORGO' ],
            [ 6, 'SOJA' ],
            [ 7, 'AVENA' ],
            [ 8, 'ALPISTE' ],
            [ 9, 'MIJO' ],
            [ 10, 'CENTENO' ],
            [ 11, 'CEBADA FORRAJERA' ],
            [ 12, 'TRIGO CANDEAL' ],
            [ 13, 'COLZA' ],
            [ 14, 'MANI' ],
            [ 15, 'ITA' ],
            [ 18, 'SORGO FORRAJERO' ],
            [ 19, 'PELLETS DE SOJA' ],
            [ 20, 'TRIGO SARRACENO' ],
            [ 21, 'SOJA SUSTENTABLE' ],
            [ 23, 'AGROPIRO ALARGADO' ],
            [ 24, 'ALFALFA' ],
            [ 28, 'FESTUCA ALTA' ],
            [ 36, 'SOJA FABRICA' ],
            [ 37, 'SOJA FABRICA ENTREGA' ],
            [ 39, 'SEMILLA DE AVENA' ],
            [ 40, 'SEMILLA DE TRIGO' ],
            [ 41, 'SEMILLA DE MAIZ' ],
            [ 42, 'SEMILLA DE SOJA' ],
            [ 43, 'SEMILLA DE GIRASOL' ],
            [ 45, 'SEMILLA NATURAL GIRASOL' ],
            [ 46, 'SEMILLA MACHO GIRASOL' ],
            [ 49, 'MAIZ DENTADO' ],
            [ 50, 'PELLETS DE GIRASOL' ],
            [ 51, 'PELLETS DE AFRECHILLO' ],
            [ 52, 'MOHA CARAPE' ],
            [ 53, 'CEBADA CERVECERA' ],
            [ 54, 'COLZA DOBLE "00"/ CANOLA' ],
            [ 56, 'MAIZ BLANCO' ],
            [ 58, 'MANI CAJA' ],
            [ 59, 'MAIZ ESPECIAL' ],
            [ 60, 'MAIZ FLAMENCO' ]
        ];

        // Insertar registros
        foreach ( $productos as $producto ) {
            DB::table( 'productos' )->insert( [
                'id' => $producto[ 0 ],
                'nombre' => $producto[ 1 ],
                'usoFrecuente' => false, // Puedes ajustar esto según tus necesidades
                'created_at' => now(),
                'updated_at' => now(),
            ] );
        }

    }
}
