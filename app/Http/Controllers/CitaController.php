<?php


namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::all();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'gestora' => 'required|string|max:255',
            'servicio' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required',
            'estado' => 'required|in:Pendiente,Confirmada,Cancelada',
        ]);

        Cita::create($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita creada correctamente.');
    }

    public function show(Cita $cita)
    {
        return view('citas.show', compact('cita'));
    }

    public function edit(Cita $cita)
    {
        return view('citas.edit', compact('cita'));
    }

    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'cliente' => 'required|string|max:255',
            'gestora' => 'required|string|max:255',
            'servicio' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora' => 'required',
            'estado' => 'required|in:Pendiente,Confirmada,Cancelada',
        ]);

        $cita->update($request->all());
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();
        return redirect()->route('citas.index')->with('success', 'Cita eliminada correctamente.');
    }
}