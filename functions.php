<?php
/**
 * Functions file for utility functions.
 * This file contains various utility functions used throughout the application.
 * 
 * @package Code-PHP8.4-App
 * @version 1.00
 */

    // Die and dump function for debugging   
    function dd($value){
        echo '<pre>';
        var_dump($value);
        echo '</pre>'; 

        die();
    }

    // Function to check if the current URL matches a given value
    function urlIs(string $value) : bool {
        return $_SERVER['REQUEST_URI'] === $value;
    }

    // Function to handle aborting the request with a specific HTTP status code
    function abort($code = 404){
        
        http_response_code($code);

        require 'views/'. $code . '.view.php';
        
        die();
    }

