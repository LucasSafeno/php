<?php 
require "vendor/autoload.php";

use App\Controller\Pages\Home;

$objRequest = new \App\Http\Request;

echo Home::getHome();

?>