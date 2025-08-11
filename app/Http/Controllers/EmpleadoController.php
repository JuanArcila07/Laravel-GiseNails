<?php


namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombres' => 'required|string|max:255',
            'PrimerApel' => 'required|string|max:255',
            'SegundoApel' => 'nullable|string|max:255',
            'Correo' => 'required|email|max:255',
            'Foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('Foto')) {
            $data['Foto'] = $request->file('Foto')->store('empleados', 'public');
        }

        Empleado::create($data);

        return redirect()->route('empleados.index')->with('success', 'Empleado creado correctamente.');
    }

    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'Nombres' => 'required|string|max:255',
            'PrimerApel' => 'required|string|max:255',
            'SegundoApel' => 'nullable|string|max:255',
            'Correo' => 'required|email|max:255',
            'Foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('Foto')) {
            $data['Foto'] = $request->file('Foto')->store('empleados', 'public');
        }

        $empleado->update($data);

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente.');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado correctamente.');
    }
}