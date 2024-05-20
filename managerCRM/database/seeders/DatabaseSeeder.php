<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $productos = [
            [1, 'TRIGO', 'Si'],
            [2, 'MAIZ', 'Si'],
            [3, 'LINO', 'No'],
            [4, 'GIRASOL', 'Si'],
            [5, 'SORGO', 'Si'],
            [6, 'SOJA', 'Si'],
            [7, 'AVENA', 'No'],
            [8, 'ALPISTE', 'No'],
            [9, 'MIJO', 'No'],
            [10, 'CENTENO', 'No'],
            [11, 'CEBADA FORRAJERA', 'Si'],
            [12, 'TRIGO CANDEAL', 'No'],
            [13, 'COLZA', 'No'],
            [14, 'MANI', 'No'],
            [15, 'ITA', 'No'],
            [18, 'SORGO FORRAJERO', 'No'],
            [19, 'PELLETS DE SOJA', 'No'],
            [20, 'TRIGO SARRACENO', 'No'],
            [21, 'SOJA SUSTENTABLE', 'No'],
            [23, 'AGROPIRO ALARGADO', 'No'],
            [24, 'ALFALFA', 'No'],
            [28, 'FESTUCA ALTA', 'No'],
            [36, 'SOJA FABRICA', 'No'],
            [37, 'SOJA FABRICA ENTREGA', 'No'],
            [39, 'SEMILLA DE AVENA', 'No'],
            [40, 'SEMILLA DE TRIGO', 'No'],
            [41, 'SEMILLA DE MAIZ', 'No'],
            [42, 'SEMILLA DE SOJA', 'No'],
            [43, 'SEMILLA DE GIRASOL', 'No'],
            [45, 'SEMILLA NATURAL GIRASOL', 'No'],
            [46, 'SEMILLA MACHO GIRASOL', 'No'],
            [49, 'MAIZ DENTADO', 'No'],
            [50, 'PELLETS DE GIRASOL', 'No'],
            [51, 'PELLETS DE AFRECHILLO', 'No'],
            [52, 'MOHA CARAPE', 'No'],
            [53, 'CEBADA CERVECERA', 'Si'],
            [54, 'COLZA DOBLE "00"/ CANOLA', 'No'],
            [56, 'MAIZ BLANCO', 'No'],
            [58, 'MANI CAJA', 'No'],
            [59, 'MAIZ ESPECIAL', 'No'],
            [60, 'MAIZ FLAMENCO', 'No'],
            [65, 'MAIZ PISCINGALLO', 'No'],
            [66, 'MAIZ DURO COLORADO', 'No'],
            [67, 'MAIZ CARGILL 280', 'No'],
            [68, 'ARROZ', 'No'],
            [69, 'MANI INDUSTRIA', 'No'],
            [70, 'SOJA CHICAGO', 'No'],
            [71, 'TRIGO CHICAGO', 'No'],
            [72, 'MAIZ CHICAGO', 'No'],
            [74, 'SEMILLA DE CEBADA SCARLETT', 'No'],
            [75, 'MAIZ PARTIDO', 'No'],
            [76, 'SOJA MINI', 'No'],
            [78, 'TRIGO MINI', 'No'],
            [79, 'MAIZ MINI', 'No'],
            [81, 'MAIZ PARTIDO', 'No'],
            [92, 'CUARTA DE CEBADA', 'No'],
            [95, 'MINI TRIGO', 'No'],
            [96, 'CT ALGODON', 'No'],
            [97, 'MAIZ FLINT', 'No'],
            [103, 'GARBANZO', 'No']
        ];

        foreach ($productos as $producto) {
            DB::table('productos')->insert([
                'id' => $producto[0],
                'nombre' => $producto[1],
                'usoFrecuente' => $producto[2],
            ]);
        }



        //EMPRESAS:
        // Insertar datos iniciales
        $empresas = [
            ['cuit' => '30599828431', 'razonSocial' => 'A REGUEIRA Y CIA. S.A. CEREALES'],
            ['cuit' => '30703597072', 'razonSocial' => 'A Y N SERVICIOS S.R.L.'],
            ['cuit' => '33541742439', 'razonSocial' => 'A.A.C.R.E.A.'],
            ['cuit' => '20110058609', 'razonSocial' => 'ABALO, ALBERTO E'],
            ['cuit' => '30618705672', 'razonSocial' => 'ADECO AGROPECUARIA S.A.'],
            ['cuit' => '30635322140', 'razonSocial' => 'ESPARTINA S.A.'],
            ['cuit' => '30539391735', 'razonSocial' => 'CAMPOAMOR HNOS. S.A.C.I.F. Y A.'],
        ];

        foreach ($empresas as $empresa) {
            DB::table('empresas')->insert($empresa);
        }
    }
}
