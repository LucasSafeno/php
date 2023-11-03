<?php 
require "vendor/autoload.php";

use App\Controller\Pages\Home;

$objRequest = new \App\Http\Request;
$objResponse = new \App\Http\Response(200, 'Olá mundo');


$objResponse->sendResponse();
exit;
echo Home::getHome();

?>