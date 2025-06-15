<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/mascotas', function () {
    return view('mascotas.form');
});



Route::get('/mascotas/por-tipo', [MascotaController::class, 'porTipo'])->name('mascotas.tipo');
Route::get('/mascotas/por-edad', [MascotaController::class, 'porEdad'])->name('mascotas.edad');
Route::get('/mascotas/filtrar', [MascotaController::class, 'filtrar'])->name('mascotas.filtrar');

