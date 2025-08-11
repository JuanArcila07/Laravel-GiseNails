<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Citas</h1>
    <a href="{{ route('citas.create') }}" class="btn btn-primary mb-3">Crear Cita</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Gestora</th>
                <th>Servicio</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($citas as $cita)
                <tr>
                    <td>{{ $cita->cliente }}</td>
                    <td>{{ $cita->gestora }}</td>
                    <td>{{ $cita->servicio }}</td>
                    <td>{{ $cita->fecha }}</td>
                    <td>{{ $cita->hora }}</td>
                    <td>{{ $cita->estado }}</td>
                    <td>
                        <a href="{{ route('citas.show', $cita) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('citas.edit', $cita) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Seguro que deseas eliminar esta cita?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No hay citas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection