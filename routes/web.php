<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource("direcciones",App\Http\Controllers\DireccioneController::class);
Route::resource("piloto-sedes",App\Http\Controllers\PilotoSedeController::class);
Route::resource("pilotos",App\Http\Controllers\PilotoController::class);
Route::resource("piloto-viajes",App\Http\Controllers\PilotoViajeController::class);
