<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdultosController extends Controller
{
    public function index()
    {
        return view('grupos.adultos', ['mensaje' => 'Bienvenido al portal de salud para adultos.']);
    }
}
