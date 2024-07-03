<?php


require 'vendor/autoload.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$router = new Framework\Router;

$router->add("/{controller}/{action}");

// $router->add("/accounts/delete", ["controller" => "accounts", "action" => "delete"]);
// $router->add("/accounts/update", ["controller" => "accounts", "action" => "update"]);
// $router->add("/accounts/edit", ["controller" => "accounts", "action" => "edit"]);
// $router->add("/accounts/create", ["controller" => "accounts", "action" => "create"]);
// $router->add("/accounts/new", ["controller" => "accounts", "action" => "new"]);
// $router->add("/accounts/show", ["controller" => "accounts", "action" => "show"]);
$router->add("/", ["controller" => "admin", "action" => "index"]);
$router->add("/accounts", ["controller" => "accounts", "action" => "index"]);
// $router->add("/accounts/index", ["controller" => "accounts", "action" => "index"]);
$router->add("/admin/index", ["controller" => "admin", "action" => "index"]);

$params = $router->match($path);

if ($params === false) {
    exit("No route matched");
}

$action = $params["action"];
$controller = "App\Controllers\\" . ucwords($params["controller"]);

// require "src/controllers/$controller.php";

$controller_object = new $controller;
$controller_object->$action();
