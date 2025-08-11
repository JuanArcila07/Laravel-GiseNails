<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Crear Cita</h1>
    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Cliente:</label>
            <input type="text" name="cliente" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Gestora:</label>
            <input type="text" name="gestora" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Servicio:</label>
            <input type="text" name="servicio" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha:</label>
            <input type="date" name="fecha" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Hora:</label>
            <input type="time" name="hora" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Estado:</label>
            <select name="estado" class="form-select" required>
                <option value="Pendiente">Pendiente</option>
                <option value="Confirmada">Confirmada</option>
                <option value="Cancelada">Cancelada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection