<?php
$heading = 'Notes';
$config = require 'config.php';
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM notes')->get();



require "views/notes.view.php";
