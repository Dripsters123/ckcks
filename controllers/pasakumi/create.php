<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (trim($_POST["date_time"]) == "") {
        $errors["date_time"] = "Date time cannot be empty";
    }

    if (strlen($_POST["nosaukums"]) > 255) {
        $errors["nosaukums"] = "Title cannot be longer than 255 chars";
    }
    if (trim($_POST["nosaukums"]) == "") {
        $errors["nosaukums"] = "Nosaukums cannot be empty";
    }

    if (strlen($_POST["norises_vieta"]) > 255) {
        $errors["norises_vieta"] = "Title cannot be longer than 255 chars";
    }
    if (trim($_POST["norises_vieta"]) == "") {
        $errors["norises_vieta"] = "Norises vieta cannot be empty";
    }


    if (empty($errors)) {

        $query = "INSERT INTO pasakumi (date_time,nosaukums,norises_vieta)
    VALUES (:date_time,:nosaukums,:norises_vieta);";

        $params = [
            ":date_time" => $_POST["date_time"],
            ":nosaukums" => $_POST["nosaukums"],
            ":norises_vieta" => $_POST["norises_vieta"]
        ];
        $db->execute($query, $params);

        header("Location: /");
        die();
    }
}

$title = "Pievienot Pasakumus";
require "views/pasakumi/create.view.php";
