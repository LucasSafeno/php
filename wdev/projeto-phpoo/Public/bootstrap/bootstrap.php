<?php
$callController = new App\Controllers\Controller;
$calledControler = $callController->controller();

$controller = new $calledControler();

$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);


$controller->$method();