<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MayoresController extends Controller
{
    public function index()
    {
        return view('grupos.mayores', ['mensaje' => 'Bienvenido al portal de salud para adultos mayores.']);
    }
}
