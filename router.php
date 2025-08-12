<?php

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // Routing logic
    $route = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
    ];

function routeToController($uri, $route) {

    if(array_key_exists($uri, $route)){

    require $route[$uri];

    }else {
        abort();
    }

}

function abort($code = 404){
    
    http_response_code($code);

    require 'views/'. $code . '.view.php';
    
    die();
}

routeToController($uri, $route);
