<?php
require "functions.php";
require "Database.php";

$config = require("config.php");

$query = "SELECT * FROM pasakumi";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
   
    $id = $_GET["id"];
    $query .= " WHERE id=:id";
    $params = [":id" => $id];
}

if (isset($_GET["kolektivi"]) && $_GET["kolektivi"] != "") {
    
    $category = trim($_GET["kolektivi"]);
    $query .= " LEFT JOIN kolektivi ON pasakumi.kolektivi_id = kolektivi.id WHERE categories.name = :kolektivi";
    $params = [":kolektivi" => $kolektivi];
}

// Create a new Database object with the configuration
$db = new Database($config);

// Execute the query and fetch all the results
$posts = $db
    ->execute($query, $params)
    ->fetchAll();
$title = "Posts";

require "views/index.view.php";
