{{-- filepath: resources/views/productos/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Producto</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $producto->nombre }}</h5>
                @if($producto->imagen)
                    <img src="{{ asset('storage/' . $producto->imagen) }}" alt="Imagen del producto" class="img-fluid mb-3"
                        style="max-width:200px;">
                @endif
                <p class="card-text"><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                <p class="card-text"><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
                <p class="card-text"><strong>Cantidad en stock:</strong> {{ $producto->stock }}</p>
                <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
            </div>
        </div>
    </div>
@endsection