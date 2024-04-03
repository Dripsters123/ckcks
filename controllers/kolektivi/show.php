<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM kolektivi WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

$title = "Show";

require "views/kolektivi/show.view.php";
