<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdolescentesController extends Controller
{
    public function index()
    {
        return view('grupos.adolescentes', ['mensaje' => 'Bienvenido al portal de salud para adolescentes.']);
    }
}
