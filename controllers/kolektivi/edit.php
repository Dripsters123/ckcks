<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "UPDATE kolektivi SET NAME = :NAME,DESCRIPTION = :DESCRIPTION  WHERE id = :id";
    $params = [
        ':NAME' => $_POST['NAME'],
        ':DESCRIPTION' => $_POST['DESCRIPTION'],
        ':id' => $_POST['id']
    ];

    $db->execute($query, $params);

    header("Location: /kolektivi");
    die();
};
$query = "SELECT * FROM kolektivi WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();


$title = "Mainīt kolektīvu";

require "views/kolektivi/edit.view.php";
