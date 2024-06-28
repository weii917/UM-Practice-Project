<?php

require "src/router.php";

$router = new Router;

$router->add("/admin/index", ["controller" => "admin", "action" => "index"]);
$router->add("/accounts/index", ["controller" => "accounts", "action" => "index"]);
$router->add("/", ["controller" => "admin", "action" => "index"]);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$params = $router->match($path);

if ($params === false) {
    exit("No route matched");
}

$action = $params["action"];
$controller = $params["controller"];

require "src/controllers/$controller.php";

$controller_object = new $controller;
$controller_object->$action();
