<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        // Obtener la lista de productos ordenados por "usoFrecuente"
        $productos = Producto::orderBy('usoFrecuente')->get();

        // Retornar la lista de productos como respuesta JSON
        return response()->json($productos);
    }
}
