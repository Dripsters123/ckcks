<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "DELETE FROM kolektivi WHERE id = :id";

    $params = [
        ":id" => $_POST["id"]
    ];
    $db->execute($query, $params);

    header("Location: /kolektivi");
    die();
};

$title = "Dzēst Pasākumus";
require "views/kolektivi/delete.view.php";