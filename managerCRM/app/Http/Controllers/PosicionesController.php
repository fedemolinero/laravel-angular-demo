<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posiciones;
use App\Models\Empresas;


class PosicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener el listado de posiciones con la información de la empresa y del producto asociados, ordenado por 'usoFrecuente' del producto
        $posiciones = Posiciones::with(['empresa', 'producto'])->join('productos', 'posiciones.idProducto', '=', 'productos.id')->join('empresas', 'posiciones.idEmpresa', '=', 'empresas.id')->orderBy('productos.usoFrecuente')->select('posiciones.*', 'empresas.Razon_Social as nombre_empresa', 'productos.nombre as nombre_producto')->get();

        // Devolver el listado de posiciones como respuesta JSON
        return response()->json($posiciones);
    }
}
