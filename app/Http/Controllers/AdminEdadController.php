<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminEdadController extends Controller
{
    public function formulario()
    {
        return view('edad.formulario');
    }

    public function procesarEdad(Request $request)
    {
        
    }

}
