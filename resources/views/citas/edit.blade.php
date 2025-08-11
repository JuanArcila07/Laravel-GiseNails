<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Cita</h1>
    <form action="{{ route('citas.update', $cita) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Cliente:</label>
            <input type="text" name="cliente" class="form-control" value="{{ $cita->cliente }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Gestora:</label>
            <input type="text" name="gestora" class="form-control" value="{{ $cita->gestora }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Servicio:</label>
            <input type="text" name="servicio" class="form-control" value="{{ $cita->servicio }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha:</label>
            <input type="date" name="fecha" class="form-control" value="{{ $cita->fecha }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Hora:</label>
            <input type="time" name="hora" class="form-control" value="{{ $cita->hora }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Estado:</label>
            <select name="estado" class="form-select" required>
                <option value="Pendiente" {{ $cita->estado == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="Confirmada" {{ $cita->estado == 'Confirmada' ? 'selected' : '' }}>Confirmada</option>
                <option value="Cancelada" {{ $cita->estado == 'Cancelada' ? 'selected' : '' }}>Cancelada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection