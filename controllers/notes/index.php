<?php
$heading = 'Notes';
$config = require base_path('config.php');
$db = new Database($config['database']);

$notes = $db->query('SELECT * FROM notes')->get();


views('notes/index.view.php', compact('heading', 'notes'));
