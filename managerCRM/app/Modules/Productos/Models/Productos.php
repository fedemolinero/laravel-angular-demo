<?php

namespace App\Modules\Productos\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model {
    protected $fillable = [ 'nombre', 'usoFrecuente' ];
    // Asegúrate de tener los campos llenables
}
