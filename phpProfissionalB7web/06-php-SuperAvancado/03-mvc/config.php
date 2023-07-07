<?php 
require "environment.php";

$config = array();

if(ENVIRONMENT == "development"){
    define("BASE_URL", "http://localhost/php/phpProfissionalB7web/06-php-SuperAvancado/03-mvc/");
    $config['dbname']   = 'estrutura_mvc';
    $config['host']     = 'localhost';
    $config['dbuser']   = 'root';
    $config['dbpass']   = 'root';
}else{
    // config external server
    define("BASE_URL", "http://www.site.com.br/");
    $config['dbname']   = 'estrutura_mvc';
    $config['host']     = 'localhost';
    $config['dbuser']   = 'root';
    $config['dbpass']   = 'root';
}
global $db; // can use everywhere

try{

    $db = new PDO("mysql:dbaname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

}catch(PDOException $e){
    echo "Error :".$e->getMessage();
    exit;
}

?>