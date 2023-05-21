<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        // Aquí puedes cargar los datos necesarios para el formulario de creación
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->Nombre = $request->input('Nombre');
        $estudiante->Edad = $request->input('Edad');
        $estudiante->Email = $request->input('Email');
        $estudiante->Telefono = $request->input('Telefono');
        $estudiante->Direccion = $request->input('Direccion');
        $estudiante->Carrera_id = $request->input('Carrera_id');
        $estudiante->save();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante registrado exitosamente.');
    }

    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->Nombre = $request->input('Nombre');
        $estudiante->Edad = $request->input('Edad');
        $estudiante->Email = $request->input('Email');
        $estudiante->Telefono = $request->input('Telefono');
        $estudiante->Direccion = $request->input('Direccion');
        $estudiante->Carrera_id = $request->input('Carrera_id');
        $estudiante->save();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')->with('success', 'Estudiante eliminado exitosamente.');
    }
}
