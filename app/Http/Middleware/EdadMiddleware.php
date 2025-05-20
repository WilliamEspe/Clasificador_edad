<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\EdadRegistro;
use App\Services\AgeRouterService;
class EdadMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $edad = $request->input('edad');

        if (!is_numeric($edad) || $edad < 0 || $edad > 120) {
            return redirect('/error');
        }

        // Guardar en base de datos
        EdadRegistro::create(['edad' => $edad]);

        // Obtener ruta y redirigir
        $ruta = AgeRouterService::obtenerRutaPorEdad((int)$edad);
        return redirect($ruta);
    }
}
