<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "INSERT INTO kolektivi (NAME,DESCRIPTION)
    VALUES (:NAME,:DESCRIPTION);";

    $params = [
        ":NAME" => $_POST["NAME"],
        ":DESCRIPTION" => $_POST["DESCRIPTION"]
    ];
    $db->execute($query, $params);

    header("Location: /kolektivi");
    die();
};

$title = "Pievienot Kolektivi";
require "views/kolektivi/create.view.php";
