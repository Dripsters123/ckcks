<?php
require "Database.php";

$config = require("config.php");

$query = "SELECT * FROM kolektivi";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {

    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
}
if (isset($_GET["category"]) && $_GET["category"] != "") {

    $category = trim($_GET["category"]);
    $query .= " LEFT JOIN categories ON kolektivi.category_id = categories.id WHERE categories.name = :category";
    $params = [":category" => $category];
}

$db = new Database($config);

$kolektivi = $db
    ->execute($query, $params)
    ->fetchAll();
$title = "kolektivi";

require "views/index.view.php";
