<?php

use Phalcon\Mvc\Router;

// Create the router
$router = new Router();

// Define a route
$router->add(
    "/guests/index",
    [
        "controller" => "guests",
        "action"     => "index",
    ]
);

$router->handle($_SERVER['REQUEST_URI']);
return $router;