<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProducto;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposProducto = TipoProducto::all();
        return response()->json(['data' => $tiposProducto], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:255',
        ]);

        $tipoProducto = TipoProducto::create($validatedData);

        return response()->json(['data' => $tipoProducto], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoProducto = TipoProducto::findOrFail($id);
        return response()->json(['data' => $tipoProducto], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipoProducto = TipoProducto::findOrFail($id);

        $validatedData = $request->validate([
            'descripcion' => 'required|max:255',
        ]);

        $tipoProducto->descripcion = $validatedData['descripcion'];
        $tipoProducto->save();

        return response()->json(['data' => $tipoProducto], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoProducto = TipoProducto::findOrFail($id);
        $tipoProducto->delete();

        return response()->json(['message' => 'Tipo de producto eliminado correctamente'], 200);
    }
}
