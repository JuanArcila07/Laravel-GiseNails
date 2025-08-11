<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalle de la Cita</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Cliente:</strong> {{ $cita->cliente }}</p>
            <p><strong>Gestora:</strong> {{ $cita->gestora }}</p>
            <p><strong>Servicio:</strong> {{ $cita->servicio }}</p>
            <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>
            <p><strong>Hora:</strong> {{ $cita->hora }}</p>
            <p><strong>Estado:</strong> {{ $cita->estado }}</p>
            <a href="{{ route('citas.edit', $cita) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('¿Seguro que deseas eliminar esta cita?')">Eliminar</button>
            </form>
            <a href="{{ route('citas.index') }}" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>
</div>
@endsection