<?php
require_once "./vendor/autoload.php";
require_once "./config/database.php";
use App\Controllers\BaseController;
use App\Controllers\Dashboard\UserController;
use App\Controllers\User\HomeController;

    $url = $_GET['url'] ?? "/";
    $user_controller = new UserController();
switch ($url) {
    case "list-user":
    case "/":
        $user_controller->ListUser();
        break;
    case "create-account":
        $user_controller->CreateAccount();
        break;
    case "store-create-account":
        $user_controller->StoreCreateAccount();
        break;
    case "update-account":
        $user_controller->UpdateAccount();
        break;
    case "store-update-account":
        $user_controller->StoreUpdateAccount();
        break;
    case "delete-account":
        $user_controller->DeleteAccount();
        break;
        case "store-delete-account":
        $user_controller->StoreDeleteAccount();
        break;

    default:
        $controller = new BaseController();
        $controller->error();
        break;
}