<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ReservaNatural;
use App\Models\Especie;

class AreaProtegida extends Model
{
    protected $table = 'areas_protegidas';
    protected $fillable = ['nombre', 'ubicacion', 'descripcion'];

      public function ReservasNaturales()
    {
        return $this->hasMany(ReservaNatural::class, 'reserva_natural_id');
    }

    public function especies()
    {
        return $this->hasMany(Especie::class, 'area_protegida_id');
    }
}
