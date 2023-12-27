<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
define('BASE_URI', '/php-basic');
$routes = [
    BASE_URI . '/' => 'controllers/index.php',
    BASE_URI . '/about' => 'controllers/about.php',
    BASE_URI . '/note' => 'controllers/note.php',
    BASE_URI . '/notes' => 'controllers/notes.php',
    BASE_URI . '/contact' => 'controllers/contact.php',

];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
