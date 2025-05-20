<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminEdadController;
use App\Http\Controllers\bebescontroller;
use App\Http\Controllers\NinosController;
use App\Http\Controllers\AdolescentesController;
use App\Http\Controllers\AdultosController;
use App\Http\Controllers\JovenesController;
use App\Http\Controllers\MayoresController;
use App\Http\Controllers\LongevosController;
use App\Http\Middleware\EdadMiddleware;
use App\Models\EdadRegistro;

Route::post('/procesar-edad', [AdminEdadController::class, 'procesarEdad'])->middleware('edad.middleware');
Route::get('/', [AdminEdadController::class, 'formulario']);

Route::view('/error', 'error');
Route::get('/bebes', [BebesController::class, 'index']);
Route::get('/ninos', [NinosController::class, 'index']);
Route::get('/adolescentes', [AdolescentesController::class, 'index']);
Route::get('/jovenes', [JovenesController::class, 'index']);
Route::get('/adultos', [AdultosController::class, 'index']);
Route::get('/mayores', [MayoresController::class, 'index']);
Route::get('/longevos', [LongevosController::class, 'index']);


