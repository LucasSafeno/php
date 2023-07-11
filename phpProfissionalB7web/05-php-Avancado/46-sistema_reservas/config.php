<?php 
try{
    $pdo = new PDO("mysql:dbname=projeto_reservas;host=localhost", "root", "root");
}catch(PDOException $e){
    die($e->getMessage());
    exit;
}

?>