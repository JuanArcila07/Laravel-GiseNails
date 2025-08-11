<?php
<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalle de la Cita</h1>
    <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>
    <p><strong>Descripción:</strong> {{ $cita->descripcion }}</p>
    <a href="{{ route('citas.edit', $cita) }}">Editar</a>
    <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
    <br>
    <a href="{{ route('citas.index') }}">Volver al listado</a>
@endsection