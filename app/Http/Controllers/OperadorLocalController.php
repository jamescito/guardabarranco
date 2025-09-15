<?php

namespace App\Http\Controllers;

use App\Models\OperadorLocal;
use Illuminate\Http\Request;

class OperadorLocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $operadorLocal = OperadorLocal::all();
        return view('OperadorLocal.index', compact('operadorLocal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('OperadorLocal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'cedula' => 'required|unique:operador_local,cedula|string |max:255',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'edad' => 'required|integer|min:18',
        ]);

        OperadorLocal::create($validate);

        return redirect()->route('operadorlocal.index')->with('success', 'Operador Local creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OperadorLocal $operadorLocal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( string $id)
    {
        $operadorLocal = OperadorLocal::findOrfail($id);
        return view('OperadorLocal.edit', compact('operadorLocal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'cedula' => 'required|unique:operador_local,cedula,'.$id,
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'edad' => 'required|integer|min:18',
        ]);
        $operadorLocal = OperadorLocal::findOrfail($id);
        $operadorLocal->update($validate);
        return redirect()->route('operadorlocal.index')->with('success', 'Operador Local actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OperadorLocal $operadorLocal)
    {
        //
    }
}
