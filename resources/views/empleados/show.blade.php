@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Empleado</h1>
    <p><strong>ID:</strong> {{ $empleado->id }}</p>
    <p><strong>Nombres:</strong> {{ $empleado->Nombres }}</p>
    <p><strong>Primer Apellido:</strong> {{ $empleado->PrimerApel }}</p>
    <p><strong>Segundo Apellido:</strong> {{ $empleado->SegundoApel }}</p>
    <p><strong>Correo:</strong> {{ $empleado->Correo }}</p>
    <p><strong>Foto:</strong><br>
        @if($empleado->Foto)
            <img src="{{ asset('storage/'.$empleado->Foto) }}" alt="Foto" width="120">
        @else
            Sin foto
        @endif
    </p>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection