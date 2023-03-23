<?php
use App\Classes\Template;
use App\Classes\Parameters;


$template = new Template();
$twig = $template->init();


$callController = new App\Controllers\Controller;
$calledController = $callController->controller();
$controller = new $calledController();
$controller->setTwig($twig);

$callMethod = new App\Controllers\Method;
$method = $callMethod->method($controller);

$parameters = new Parameters;
$parameter = $paramters->getParamterMethod($controller, $method);
$controller->$method($parameter);
