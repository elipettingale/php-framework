<?php

namespace App\Services;

class Router
{
    public $routes = [];

    public function get(string $url, string $view): void
    {
        $this->routes[$url] = $view;
    }
}
