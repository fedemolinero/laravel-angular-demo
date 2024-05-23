<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasController extends Controller
 {
    public function index()
 {
        $empresas = Empresas::all( [ 'id', 'Razon_Social' ] );
        // Obtener solo los campos necesarios
        return response()->json( $empresas );
    }
}
