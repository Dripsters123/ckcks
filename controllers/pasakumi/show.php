<?php
require "Database.php";
$config = require("config.php");


$query = "SELECT * FROM pasakumi WHERE id = :id";

$params = [
    ":id" => $_POST["id"]
];


$title = " ";
require "views/pasakumi/delete.view.php";
