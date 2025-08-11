@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nombres" class="form-label">Nombres</label>
            <input type="text" name="Nombres" class="form-control" value="{{ old('Nombres', $empleado->Nombres) }}" required>
            @error('Nombres') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="PrimerApel" class="form-label">Primer Apellido</label>
            <input type="text" name="PrimerApel" class="form-control" value="{{ old('PrimerApel', $empleado->PrimerApel) }}" required>
            @error('PrimerApel') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="SegundoApel" class="form-label">Segundo Apellido</label>
            <input type="text" name="SegundoApel" class="form-control" value="{{ old('SegundoApel', $empleado->SegundoApel) }}">
            @error('SegundoApel') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="email" name="Correo" class="form-control" value="{{ old('Correo', $empleado->Correo) }}" required>
            @error('Correo') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label for="Foto" class="form-label">Foto</label>
            @if($empleado->Foto)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$empleado->Foto) }}" alt="Foto" width="100">
                </div>
            @endif
            <input type="file" name="Foto" class="form-control">
            @error('Foto') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection