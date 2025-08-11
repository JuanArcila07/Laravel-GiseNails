{{-- filepath: resources/views/servicios/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Servicio</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $servicio->nombre }}</h5>
                @if($servicio->imagen)
                    <img src="{{ asset('storage/' . $servicio->imagen) }}" alt="Imagen del servicio" class="img-fluid mb-3"
                        style="max-width:200px;">
                @endif
                <p class="card-text"><strong>Descripción:</strong> {{ $servicio->descripcion }}</p>
                <p class="card-text"><strong>Precio:</strong> ${{ number_format($servicio->precio, 2) }}</p>
                <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Volver</a>
                <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary">Editar</a>
            </div>
        </div>
    </div>
@endsection