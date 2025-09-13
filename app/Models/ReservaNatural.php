<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AreaProtegida;
class ReservaNatural extends Model
{
    protected $table = 'reservas_naturales';
    protected $fillable = ['nombre', 'estado', 'descripcion', 'area_protegida_id'];

    public function AreaProtegida()
    {
        return $this->belongsTo(AreaProtegida::class, 'area_protegida_id');
    }
}
