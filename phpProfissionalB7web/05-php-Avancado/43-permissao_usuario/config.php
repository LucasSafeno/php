<?php 
try{
    $pdo = new PDO("mysql:dbname=projeto_permissao;host=localhost", "root", "root");
}catch(PDOException $e){
    die($e->getMessage());
}

?>