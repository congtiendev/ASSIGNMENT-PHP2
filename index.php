<?php
require_once "./vendor/autoload.php";
require_once "./config/database.php";

$url = $_GET['url'] ?? "/";
switch ($url) {
    case "/":
        $controller = new App\Http\Controllers\User\HomeController();
        echo $controller->index();
        break;
    default:
        echo "404 NOT FOUND";
        break;
}