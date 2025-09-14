<?php

namespace App\Http\Controllers;

use App\Models\Especie;
use Illuminate\Http\Request;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especies = Especie::all();
        return view('Especie.index', compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Especie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valited = $request->validate([
            'nombre_comun' => 'required|string|max:255',
            'nombre_cientifico' => 'required|string|max:255',
            'tipo' => 'required|string|max:100',
            'area_protegida_id' => 'required|exists:areas_protegidas,id',
           
           ]);

        Especie::create($valited);
        return redirect()->route('especie.index')->with('success', 'Especie creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Especie $especie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $especies = Especie::findOrfail($id);
        return view('Especie.edit', compact('especies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
        $valited = $request->validate([
            'nombre_comun' => 'required|string|max:255',
            'nombre_cientifico' => 'required|string|max:255',
            'tipo' => 'required|string|max:100',
            'area_protegida_id' => 'required|exists:areas_protegidas,id',
           
           ]);
        
        $especie = Especie::findOrFail($id);
        $especie->update($valited);
        return redirect()->route('especie.index')->with('success', 'Especie actualizada exitosamente.');

    }
    
    public function destroy( string $id)
    {
        $especies = Especie::findOrfail($id);
        $especies->delete();
        return redirect()->route('especie.index');
    }
}
