<?php
    /**
     *  frontend controller
     *  This file serves as the entry point for the application.
     *  It includes necessary files and handles routing.
     *  It also sets up error reporting for development purposes.
     *  @package Code-PHP8.4-App
     *  @version 1.00
     */

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Include the functions file for utility functions
    require 'functions.php';
  
    // Include the router file to handle routing
    require 'router.php';