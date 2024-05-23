<?php

namespace App\Modules\Empresas\Controllers;

use Illuminate\Http\Request;
use App\Modules\Empresas\Models\Empresas;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class EmpresasController extends BaseController
 {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
 {
        $empresas = Empresas::all( [ 'id', 'Razon_Social' ] );
        // Obtener solo los campos necesarios
        return response()->json( $empresas );
    }
}
