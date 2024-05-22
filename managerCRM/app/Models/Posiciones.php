<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Productos;
use App\Models\Empresas;


class Posiciones extends Model
 {
    // Define la relación con el modelo Producto
    public function producto(){
        return $this->belongsTo( Productos::class, 'idProducto' );
    }
    
    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'idEmpresa')->select('id', 'Razon_Social as nombre');
    }
    
}
