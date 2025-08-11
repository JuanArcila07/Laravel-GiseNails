<?php
<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Editar Cita</h1>
    <form action="{{ route('citas.update', $cita) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Fecha:</label>
        <input type="datetime-local" name="fecha" value="{{ \Carbon\Carbon::parse($cita->fecha)->format('Y-m-d\TH:i') }}" required>
        <label>Descripción:</label>
        <input type="text" name="descripcion" value="{{ $cita->descripcion }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection