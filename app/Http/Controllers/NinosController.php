<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NinosController extends Controller
{
    public function index()
    {
        return view('grupos.ninos', ['mensaje' => 'Bienvenido al portal de salud para niños.']);
    }
}
