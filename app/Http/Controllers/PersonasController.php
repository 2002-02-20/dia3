<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Personas::all();
        return $personas;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Personas::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellido,
            'telefono' => $request->telefono
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Personas $personas)
    {
        $personas = Personas::find($personas);
        return $personas;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personas $personas)
    {

        $personas = Personas::find($personas);

        $personas->update(
            [
                'nombre' => $request->nombre,
                'apellidos' => $request->apellido,
                'telefono' => $request->telefono
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
