<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Auth;

// Paso 1: Redirigir la raíz al login
Route::get('/', function () {
    return redirect()->route('login');
});

// Paso 2: Proteger los CRUDs con middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::resource('servicios', App\Http\Controllers\ServicioController::class);
    Route::resource('productos', App\Http\Controllers\ProductoController::class);
    Route::resource('empleados', EmpleadoController::class);
});

// Auth routes
Auth::routes();

Route::resource('citas', App\Http\Controllers\CitaController::class);