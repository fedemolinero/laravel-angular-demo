<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresas = [
            [
                'Cuit' => '30599828431',
                'Razon_Social' => 'A REGUEIRA Y CIA. S.A. CEREALES'
            ],
            [
                'Cuit' => '30703597072',
                'Razon_Social' => 'A Y N SERVICIOS S.R.L.'
            ],
            [
                'Cuit' => '33541742439',
                'Razon_Social' => 'A.A.C.R.E.A.'
            ],
            [
                'Cuit' => '20110058609',
                'Razon_Social' => 'ABALO, ALBERTO E'
            ],
            [
                'Cuit' => '30618705672',
                'Razon_Social' => 'ADECO AGROPECUARIA S.A.'
            ],
            [
                'Cuit' => '30635322140',
                'Razon_Social' => 'ESPARTINA S.A.'
            ],
            [
                'Cuit' => '30539391735',
                'Razon_Social' => 'CAMPOAMOR HNOS. S.A.C.I.F. Y A.'
            ],
        ];

        DB::table('empresas')->insert($empresas);
    }
}
