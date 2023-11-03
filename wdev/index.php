<?php 
require "vendor/autoload.php";


use App\Http\Router;
use App\Http\Response;
use App\Controller\Pages\Home;

define('URL','http://localhost/php/wdev');

$obRoute = new Router('URL');

// Rota home
$obRoute->get('/', [
    function(){
        return new Response(200, Home::getHome());
    }
]);

// Imprime o response da rota
$obRoute->run()
        ->sendResponse();

?>