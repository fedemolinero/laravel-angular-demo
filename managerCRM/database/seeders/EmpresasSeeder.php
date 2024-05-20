<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
