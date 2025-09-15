<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperadorLocal extends Model
{
    protected $table = 'operador_local';
    protected $fillable = ['cedula','nombre','apellido','telefono', 'direccion', 'edad'];
}
