@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="Nombres" class="form-label">Nombres</label>
            <input type="text" name="Nombres" class="form-control" value="{{ old('Nombres') }}" required>
            @error('Nombres')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection