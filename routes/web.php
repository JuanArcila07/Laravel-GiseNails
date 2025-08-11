<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;
use Illuminate\Support\Facades\Auth;

// Paso 1: Redirigir la raíz al login
Route::get('/', function () {
    return redirect()->route('login');
});

// Paso 2: Proteger los CRUDs con middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::resource('productos', ProductoController::class);
    Route::resource('servicios', ServicioController::class);
});

// Auth routes
Auth::routes();