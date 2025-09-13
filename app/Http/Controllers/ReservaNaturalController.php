<?php

namespace App\Http\Controllers;

use App\Models\ReservaNatural;
use Illuminate\Http\Request;

class ReservaNaturalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservaNatural = ReservaNatural::all();
        return view('ReservaNatural.index', compact('reservaNatural'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ReservaNatural.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'area_protegida_id' => 'required|exists:areas_protegidas,id',
            
        ]);

        ReservaNatural::create($validated);

        return redirect()->route('reservanatural.index')->with('success', 'Reserva Natural creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReservaNatural $reservaNatural)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reservaNatural = ReservaNatural::findOrfail($id);
        return view('ReservaNatural.edit', compact('reservaNatural'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validar = $request->validate([
            'nombre' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $reservaNatural = ReservaNatural::findOrFail($id);
        $reservaNatural->update($validar);
        return view('ReservaNatural.index')->with('success', 'Reserva Natural actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
        $reservaNatural = ReservaNatural::findOrFail($id);
        $reservaNatural->delete();
        return redirect()->route('reservanatural.index');
    }
}
