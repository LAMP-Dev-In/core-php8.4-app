<?php

// Load configs from config.ini
$config_ini = parse_ini_file("./configs/config.ini", true);

$config = require './configs/config.php';    

$db = new Database(
        config: $config['dadabase'],
        username: $config_ini['database']['username'], 
        password: $config_ini['database']['password']
    );



$heading = 'My Notes';

$notes = $db->query("SELECT * FROM notes WHERE user_id=4")->get();


require 'views/notes.view.php';
