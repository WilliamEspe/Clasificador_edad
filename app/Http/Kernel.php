<?php
namespace App\Http\Kernel;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\EdadMiddleware;
class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'web' => [
            // Other middleware...
            \App\Http\Middleware\EdadMiddleware::class,
        ],
    ];

    protected $routeMiddleware = [
        // Other route middleware...
        'edad' => \App\Http\Middleware\EdadMiddleware::class,
    ];
}
