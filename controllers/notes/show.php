<?php
$heading = 'Note';
$config = require base_path('config.php');
$db = new Database($config['database']);
$currentUserID = 1;


$note = $db->query('SELECT * FROM notes where id = :id', ['id' => $_GET['id']])->findOrFail();

authorize($note['user_id'] === $currentUserID);



views('notes/show.view.php', compact('heading', 'note'));
