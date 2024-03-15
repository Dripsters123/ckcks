<?php
require "Database.php";

$config = require("config.php");

$query = "SELECT * FROM pasakumi";
$params = [];

$db = new Database($config);

$posts = $db
    ->execute($query, $params)
    ->fetchAll();
$title = " ";

require "views/index.view.php";
