<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Producto;


class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'imagen' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }

        Producto::create($data);
        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'imagen' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            // Elimina la imagen anterior si existe
            if ($producto->imagen) {
                Storage::disk('public')->delete($producto->imagen);
            }
            $data['imagen'] = $request->file('imagen')->store('imagenes', 'public');
        }

        $producto->update($data);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }
}