<?php
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (!Validator::string($_POST["nosaukums"], min: 1, max: 255)) {
        $errors["nosaukums"] = "nosaukums cannot be empty or too long";
    }
    if (!Validator::string($_POST["norises_vieta"], min: 1, max: 255)) {
        $errors["norises_vieta"] = "nosaukums cannot be empty or too long";
    }


    if (empty($errors)) {
        $query = "UPDATE pasakumi SET date_time = :date_time,nosaukums = :nosaukums, norises_vieta = :norises_vieta
                  WHERE id = :id;";

        $params = [
            ":date_time" => $_POST["date_time"],
            ":nosaukums" => $_POST["nosaukums"],
            "norises_vieta" => $_POST["norises_vieta"],
            ":id" => $_POST["id"]
        ];
        $db->execute($query, $params);

        header("Location: /");
        die();
    }
}
$params[":id"] = $_GET["id"];
$query = "SELECT * FROM pasakumi WHERE id = :id";

$post = $db->execute($query, $params)->fetch();

$title = "Pasakumi";

require "views/pasakumi/edit.view.php";
