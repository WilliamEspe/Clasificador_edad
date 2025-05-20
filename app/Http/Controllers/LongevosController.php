<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LongevosController extends Controller
{
    public function index()
    {
        return view('grupos.longevos', ['mensaje' => 'Bienvenido al portal de salud para personas longevas.']);
    }
}
