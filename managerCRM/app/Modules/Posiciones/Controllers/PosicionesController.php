<?php

namespace App\Modules\Posiciones\Controllers;

use Illuminate\Http\Request;
use App\Modules\Posiciones\Models\Posiciones;
use App\Modules\Empresas\Models\Empresas;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PosicionesController extends BaseController
 {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
 {
        // Obtener el listado de posiciones con la información de la empresa y del producto asociados, ordenado por 'usoFrecuente' del producto
        $posiciones = Posiciones::with( [ 'empresa', 'producto' ] )->join( 'productos', 'posiciones.idProducto', '=', 'productos.id' )->join( 'empresas', 'posiciones.idEmpresa', '=', 'empresas.id' )->orderBy( 'productos.usoFrecuente' )->select( 'posiciones.*', 'empresas.Razon_Social as nombre_empresa', 'productos.nombre as nombre_producto' )->get();

        // Devolver el listado de posiciones como respuesta JSON
        return response()->json( $posiciones );
    }

    public function store( Request $request )
 {
        // Validar los datos de la solicitud
        $request->validate( [
            'idEmpresa' => 'required',
            'idProducto' => 'required',
            'fechaEntrega' => 'required|date|after_or_equal:today',
            'moneda' => 'required',
            'precio' => 'required|numeric|min:0',
            // Agrega más reglas de validación si es necesario
        ] );

        // Crear la posición si pasa la validación
        $posicion = new Posiciones();
        $posicion->idEmpresa = $request->input( 'idEmpresa' );
        $posicion->idProducto = $request->input( 'idProducto' );
        $posicion->fechaEntregaInicio = $request->input( 'fechaEntrega' );
        $posicion->moneda = $request->input( 'moneda' );
        $posicion->precio = $request->input( 'precio' );
        // Asigna otros campos según sea necesario
        $posicion->save();

        // Devolver la posición creada como respuesta
        return response()->json( $posicion, 201 );
    }

}
