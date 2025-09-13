<?php

namespace App\Http\Controllers;

use App\Models\AreaProtegida;
use Illuminate\Http\Request;

class AreaProtegidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $areaProtegida = AreaProtegida::all();
        return view('AreaProtegida.index', compact('areaProtegida'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AreaProtegida.create');    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion'=>'required|string|max:255',
            'descripcion'=>'required|string|max:255',
        ]);

        AreaProtegida::create($validated);
        return redirect('AreaProtegida.index')->with('success', 'Área Protegida creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AreaProtegida $areaProtegida)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $areaProtegida = AreaProtegida::findOrFail($id);
        return view('AreaProtegida.edit', compact('areaProtegida'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
           $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'ubicacion'=>'required|string|max:255',
            'descripcion'=>'required|string|max:255',
        ]);

        $areaProtegida = AreaProtegida::findOrFail($id);
        $areaProtegida->update($validated);
        return redirect()->route('areaprotegida.index')->with('success', 'Área Protegida actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $areaProtegida = AreaProtegida::findOrFail($id);
        $areaProtegida->delete();
        return redirect()->route('areaprotegida.index');
    }   
}
