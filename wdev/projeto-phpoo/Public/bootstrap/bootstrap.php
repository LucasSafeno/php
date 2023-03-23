<?php
use App\Classes\Template;

$template = new Template();
$twig = $template->init();


$callController = new App\Controllers\Controller;
$calledControler = $callController->controller();

$controller = new $calledControler();
$controller->setTwig($twig);

$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);


$controller->$method();