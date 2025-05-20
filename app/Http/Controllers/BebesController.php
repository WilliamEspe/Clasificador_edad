<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebesController extends Controller
{
    public function index()
    {
        return view('grupos.bebes', ['mensaje' => 'Bienvenido al portal de salud para bebés.']);
    }
}
