<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller {

    // Método para listar productos ordenados por 'usoFrecuente'

    public function listarProductosOrdenados() {
        // Consultar productos ordenados por 'usoFrecuente'
        $productos = Productos::orderBy( 'usoFrecuente', 'desc' )->get();

        // Retornar los productos como JSON
        return response()->json( $productos );

         // Convertir la colección de productos a un arreglo asociativo
        //  $productosArray = $productos->toArray();

         // Retornar el arreglo de productos
        //  return $productosArray;
    }

}
