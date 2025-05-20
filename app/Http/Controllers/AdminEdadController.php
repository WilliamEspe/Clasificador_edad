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
        $edad = $request->input('edad');

        if (!is_numeric($edad) || $edad < 0 || $edad > 120) {
            return redirect('/error');
        }

        \App\Models\EdadRegistro::create(['edad' => $edad]);
        $ruta = \App\Services\AgeRouterService::obtenerRutaPorEdad((int) $edad);

        // Guardar en sesión que sí pasó por aquí
        session(['edad_valida' => true]);

        return redirect($ruta);
    }


}
