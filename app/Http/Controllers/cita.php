<?php


namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{
    public function index()
    {
        $citas = Cita::where('user_id', Auth::id())->get();
        return view('citas.index', compact('citas'));
    }

    public function create()
    {
        return view('citas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'descripcion' => 'nullable|string',
        ]);

        Cita::create([
            'user_id' => Auth::id(),
            'fecha' => $request->fecha,
            'descripcion' => $request->descripcion,
        ]);

        return redirect()->route('citas.index');
    }

    public function edit(Cita $cita)
    {
        if ($cita->user_id !== Auth::id()) abort(403);
        return view('citas.edit', compact('cita'));
    }

    public function update(Request $request, Cita $cita)
    {
        if ($cita->user_id !== Auth::id()) abort(403);

        $request->validate([
            'fecha' => 'required|date',
            'descripcion' => 'nullable|string',
        ]);

        $cita->update($request->only('fecha', 'descripcion'));

        return redirect()->route('citas.index');
    }

    public function destroy(Cita $cita)
    {
        if ($cita->user_id !== Auth::id()) abort(403);
        $cita->delete();
        return redirect()->route('citas.index');
    }
    public function show(Cita $cita)
    {
        if ($cita->user_id !== Auth::id()) abort(403);
        return view('citas.show', compact('cita'));
    }
}
