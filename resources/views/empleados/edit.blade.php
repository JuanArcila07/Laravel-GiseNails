@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nombres" class="form-label">Nombres</label>
            <input type="text" name="Nombres" class="form-control" value="{{ old('Nombres', $empleado->Nombres) }}" required>
            @error('Nombres')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection