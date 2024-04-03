<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "UPDATE posts SET name = :name,description = :description";
    $params = [
        'name' => $_POST['name'],
        'description' => $_POST['description']
    ];

    $db->execute($query, $params);

    header("Location: /kolektivi");
    die();
};

$title = "Mainīt kolektīvu";

require "views/posts/edit.view.php";
