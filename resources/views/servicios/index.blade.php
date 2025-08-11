@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Servicios</h1>
    <a href="{{ route('servicios.create') }}" class="btn btn-primary mb-3">Nuevo Servicio</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->nombre }}</td>
                <td>${{ $servicio->precio }}</td>
                <td>{{ $servicio->descripcion }}</td>
                <td>
                    @if($servicio->imagen)
                        <img src="{{ asset('storage/'.$servicio->imagen) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro de eliminar?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection