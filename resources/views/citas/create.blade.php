<?php
<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Cita</h1>
    <form action="{{ route('citas.store') }}" method="POST">
        @csrf
        <label>Fecha:</label>
        <input type="datetime-local" name="fecha" required>
        <label>Descripción:</label>
        <input type="text" name="descripcion">
        <button type="submit">Guardar</button>
    </form>
@endsection