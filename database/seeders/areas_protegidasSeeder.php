<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class areas_protegidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('areas_protegidas')->updateOrInsert([
            'nombre' => 'Reserva Bosawas',
            'ubicacion' => 'Jinotega, RACCN',
            'descripcion' => 'Mayor reserva forestal de Centroamérica, rica en biodiversidad.',
            
        ]);

            DB::table('areas_protegidas')->updateOrInsert([
                'nombre' => 'Parque Nacional Volcán Masaya',
                'ubicacion' => 'Masaya',
                'descripcion' => 'Famoso por su volcán activo y vistas impresionantes.',
                
            ]);
    
            
    }
}
