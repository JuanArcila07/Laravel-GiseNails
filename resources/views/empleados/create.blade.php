@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuevo Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Nombres" class="form-label">Nombres</label>
            <input type="text" name="Nombres" class="form-control" value="{{ old('Nombres') }}" required>
            @error('Nombres')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="PrimerApel" class="form-label">Primer Apellido</label>
            <input type="text" name="PrimerApel" class="form-control" value="{{ old('PrimerApel') }}" required>
            @error('PrimerApel')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="SegundoApel" class="form-label">Segundo Apellido</label>
            <input type="text" name="SegundoApel" class="form-control" value="{{ old('SegundoApel') }}">
            @error('SegundoApel')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="email" name="Correo" class="form-control" value="{{ old('Correo') }}" required>
            @error('Correo')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Foto" class="form-label">Foto</label>
            <input type="file" name="Foto" class="form-control">
            @error('Foto')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button class="btn btn-primary">Guardar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection