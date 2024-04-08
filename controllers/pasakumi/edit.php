<?php
require "Database.php";
require "Validator.php";

$config = require ("config.php");
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $errors = [];
  
  if(!Validator::string($_POST["NAME"], min: 1, maxlen: 255)){
    $errors["NAME"] = "Kolektivs ir par garu vai tuks";
  }
  if(!Validator::string($_POST["DESCRIPTION"], min: 1, maxlen: 255)){
    $errors["DESCRIPTION"] = "Apraksts ir par garu vai tuks";
  }
  
  if(empty($errors)){
    $query = "UPDATE kolektivi SET
    NAME = :NAME, DESCRIPTION = :DESCRIPTION WHERE id = :id;";
   $params = [
     ":NAME" => $_POST["NAME"],
      ":DESCRIPTION" => $_POST["DESCRIPTION"],
      ":id" => $_POST["id"]
   ];
  
    $db->execute($query, $params);
    header("Location: /kolektivi");
    die();
  }
}
$params[":id"] = $_GET["id"];
$query = "SELECT * FROM pasakumi WHERE id = :id";
$post = $db->execute($query, $params)->fetch();

$title = "Edit";
require "views/kolektivi/edit.view.php";