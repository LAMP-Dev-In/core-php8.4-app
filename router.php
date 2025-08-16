<?php
/** 
 * Route for controllers.
 * This file contains the routing logic for the application.
 * It maps URIs to their corresponding controller files.
 * 
 * @package Core-PHP8.4-App
 * @version 1.00
 */
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // Define the routes mapping URIs to controller files
    $route = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/notes' => 'controllers/notes.php',
        '/note' => 'controllers/note.php',
        '/contact' => 'controllers/contact.php',
    ];

    // Routing logic 
    function routeToController($uri, $route) {

        if(array_key_exists($uri, $route)){

        require $route[$uri];

        }else {
            abort();
        }

    }

    routeToController($uri, $route);
