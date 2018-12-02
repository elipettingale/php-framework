<?php

require __DIR__.'/../vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade(
    [__DIR__ . '/../resources/views'],
    __DIR__ . '/../resources/cache'
);

require_once __DIR__ . '/../routes/web.php';

if (array_key_exists($uri, $router->routes)) {
    echo $blade->make($router->routes[$uri]);
} else {
    echo '404';
    die();
}
