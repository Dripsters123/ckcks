<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "INSERT INTO kolektivi (name,description)
    VALUES (:name,:description);";

    $params = [
        ":name" => $_POST["description"],
        ":description" => $_POST["description"]
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();
};

$title = "Pievienot Pasakumus";
require "views/kolektivi-create.view.php";
