<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class HeaderApp extends Component
{
    public function __construct(public string $name) {}

    public function render(): View|Closure|string
    {
        $menus = [];

        $routes = [
            ['name' => 'Início', 'route' => 'app'],
            ['name' => 'Eventos', 'route' => 'events'],
            ['name' => 'Sobre', 'route' => 'about'],
            ['name' => 'Contacto', 'route' => 'contact'],
        ];

        foreach ($routes as $route) {
            if (Route::has($route['route'])) {
                $menus[] = [
                    'name' => $route['name'],
                    'url' => route($route['route']),
                    'current' => Route::currentRouteNamed($route['route']) ? "true" : "false",
                ];
            }
        }

        return view('components.header-app', ['menus' => $menus]);
    }
}
