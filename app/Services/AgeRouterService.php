<?php
namespace App\Services;

class AgeRouterService
{
    public static function obtenerRutaPorEdad(int $edad): string
    {
        return match (true) {
            $edad <= 5 => '/bebes',
            $edad <= 12 => '/ninos',
            $edad <= 17 => '/adolescentes',
            $edad <= 25 => '/jovenes',
            $edad <= 59 => '/adultos',
            $edad <= 74 => '/mayores',
            $edad <= 120 => '/longevos',
            default => '/error',
        };
    }
}
