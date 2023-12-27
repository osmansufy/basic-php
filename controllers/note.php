<?php
$heading = 'Note';
$config = require 'config.php';
$db = new Database($config['database']);


$note = $db->query('SELECT * FROM notes where id = :id', ['id' => $_GET['id']])->fetch(PDO::FETCH_OBJ);



require "views/note.view.php";
