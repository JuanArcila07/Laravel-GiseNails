@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Empleado</h1>
    <p><strong>ID:</strong> {{ $empleado->id }}</p>
    <p><strong>Nombres:</strong> {{ $empleado->Nombres }}</p>
    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection