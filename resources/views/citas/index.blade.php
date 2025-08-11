<?php
<!-- filepath: c:\xampp\htdocs\Laravel-GiseNails\resources\views\citas\index.blade.php -->
// ...existing code...
<li>
    {{ $cita->fecha }} - {{ $cita->descripcion }}
    <a href="{{ route('citas.show', $cita) }}">Ver detalle</a>
    <a href="{{ route('citas.edit', $cita) }}">Editar</a>
    <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</li>
// ...existing code...