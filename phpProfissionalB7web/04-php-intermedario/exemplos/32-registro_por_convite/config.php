<?php 

try{
    $pdo = new PDO("mysql:dbname=projeto_login;host=localhost", "safeno", "root");

}catch(PDOException $e){
    echo "Falhou : ".$e->getMessage();
    exit;
}

?>