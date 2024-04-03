<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM pasakumi WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Pasākums";

require "views/pasakumi/show.view.php";
