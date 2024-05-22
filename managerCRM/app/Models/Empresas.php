<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'empresas'; // Especifica el nombre de la tabla si no sigue la convención de Laravel
    
    // Indica que no se utilizarán los timestamps 'created_at' y 'updated_at'
    public $timestamps = false;

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'cuit', 'razon_social'
    ];
}
