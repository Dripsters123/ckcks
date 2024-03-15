<?php

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];


if ($url == "/kolektivi") {
    require "controllers/kolektivi.php";
} else if ($url == "/") {
    require "controllers/index.php";
} else {
    http_response_code(404);
    require "controllers/404.php";
}
