<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaProtegida extends Model
{
    protected $table = 'areas_protegidas';
    protected $fillable = ['nombre', 'ubicacion', 'descripcion'];
}
