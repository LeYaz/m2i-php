<?php

    require_once "app/config/routing.php";
    dump($route);

    $method = $route["action"];
    $controller = new $route["controller"];
    $controller->$method();