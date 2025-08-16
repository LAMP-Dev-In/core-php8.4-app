<?php

// Load configs from config.ini
$config_ini = parse_ini_file("./configs/config.ini", true);

$config = require './configs/config.php';    

$db = new Database(
        config: $config['dadabase'],
        username: $config_ini['database']['username'], 
        password: $config_ini['database']['password']
    );



$heading = 'Note Details';

$currentUserId = 4; //replace with logged-in user ID
$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $id
    ])->fetch(PDO::FETCH_OBJ);

if (!$note) {
    abort(Response::NOT_FOUND);
}

if ($note->user_id !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require 'views/note.view.php';
