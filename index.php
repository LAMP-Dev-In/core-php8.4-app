<?php
    /**
     *  frontend controller
     *  This file serves as the entry point for the application.
     *  It includes necessary files and handles routing.
     *  It also sets up error reporting for development purposes.
     *  @package Core-PHP8.4-App
     *  @version 1.00
     */

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Include the functions file for utility functions
    require 'functions.php';

    require 'Database.php';
  
    // Include the router file to handle routing
   // require 'router.php';
    

    // Load configs from config.ini
    $config_ini = parse_ini_file("./configs/config.ini", true);

   $config = require './configs/config.php';    

   $db = new Database(
            config: $config['dadabase'],
            username: $config_ini['database']['username'], 
            password: $config_ini['database']['password']
        );


   $id = $_GET['id'];

   echo $query = "SELECT * FROM posts WHERE id = :id";


   $posts = $db->query($query, [':id' => $id])->fetchAll(PDO::FETCH_OBJ);

    foreach ($posts as $post):
        echo '<li>' . $post->id . '. ' . $post->title . '</li>';

    endforeach;