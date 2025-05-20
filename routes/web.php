<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminEdadController;
use App\Http\Controllers\BebesController;
use App\Http\Controllers\NinosController;
use App\Http\Controllers\AdolescentesController;
use App\Http\Controllers\AdultosController;
use App\Http\Controllers\JovenesController;
use App\Http\Controllers\MayoresController;
use App\Http\Controllers\LongevosController;

// Formulario inicial
Route::get('/', [AdminEdadController::class, 'formulario']);

// Procesamiento con middleware personalizado
Route::post('/procesar-edad', [AdminEdadController::class, 'procesarEdad']);


// Vista de error amigable
Route::view('/error', 'error');

// Rutas protegidas por grupo etario (accesibles solo si se llega desde el middleware correctamente)
Route::get('/bebes', [BebesController::class, 'index']);
Route::get('/ninos', [NinosController::class, 'index']);
Route::get('/adolescentes', [AdolescentesController::class, 'index']);
Route::get('/jovenes', [JovenesController::class, 'index']);
Route::get('/adultos', [AdultosController::class, 'index']);
Route::get('/mayores', [MayoresController::class, 'index']);
Route::get('/longevos', [LongevosController::class, 'index']);

// (Opcional) rutas nombradas si las estás usando en formularios con `route('admin.edad.formulario')`
Route::get('/admin/edad', [AdminEdadController::class, 'formulario'])->name('admin.edad.formulario');
Route::post('/admin/edad/procesar', [AdminEdadController::class, 'procesarEdad'])->name('admin.edad.procesar');
