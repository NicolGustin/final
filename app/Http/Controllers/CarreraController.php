<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
   
    public function index()
    {
        $carreras = Carrera::all();
        return view('carreras.index', compact('carreras'));
    }

    public function create()
    {
        return view('carreras.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Descripcion' => 'required',
        ]);

        Carrera::create($request->all());

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera registrada correctamente.');
    }

    public function show(Carrera $carrera)
    {
        return view('carreras.show', compact('carrera'));
    }

    public function edit(Carrera $carrera)
    {
        return view('carreras.edit', compact('carrera'));
    }

    public function update(Request $request, Carrera $carrera)
    {
        $request->validate([
            'Nombre' => 'required',
            'Descripcion' => 'required',
        ]);

        $carrera->update($request->all());

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera actualizada correctamente.');
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();

        return redirect()->route('carreras.index')
            ->with('success', 'Carrera eliminada correctamente.');
    }
}
