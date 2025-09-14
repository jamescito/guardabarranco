<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AreaProtegida;

class Especie extends Model
{
    protected $table = 'especies';
    protected $fillable = [
        'nombre_comun',
        'nombre_cientifico',
        'tipo',
        'area_protegida_id',
    ];

   
    public function areaProtegida()
   {

        return $this->belongsTo(AreaProtegida::class, 'area_protegida_id');

    }

}
