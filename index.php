<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require 'functions.php';

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // Routing logic
    $route = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
    ];


if(array_key_exists($uri, $route)){
    require $route[$uri];
}else {
    http_response_code(404);

    require 'views/404.view.php';
    die();
}