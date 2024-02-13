<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
define('BASE_URI', '/php-basic/public');


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        var_dump($uri);
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";

    die();
}

$routes = require 'routes.php';
routeToController($uri, $routes);
