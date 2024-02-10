<?php
require 'Validator.php';
$heading = 'Note';
$config = require 'config.php';
$db = new Database($config['database']);

// If the form is submitted then add the note to the database
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors[] = 'The note must be between 1 and 1000 characters';
    }

    if (empty($errors)) {

        $db->query("INSERT INTO notes (body,user_id) VALUES (:body,:user_id)", [
            'body' => $_POST['body'],
            'user_id' => $_SESSION['user_id'] ?? 1
        ]);

        header('Location: /php-basic/notes');
    }
}

require "views/note-create.view.php";
