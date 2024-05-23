<?php

namespace App\Modules\Productos\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Modules\Productos\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends BaseController {

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
