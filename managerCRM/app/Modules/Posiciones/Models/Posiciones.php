<?php

namespace App\Modules\Posiciones\Models;

use App\Modules\Empresas\Models\Empresas;
use App\Modules\Productos\Models\Productos;
use Illuminate\Database\Eloquent\Model;

class Posiciones extends Model
{
    // Define la relación con el modelo Producto
    public function producto()
    {
        return $this->belongsTo(Productos::class, 'idProducto');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'idEmpresa')->select('id', 'Razon_Social as nombre');
    }
}
