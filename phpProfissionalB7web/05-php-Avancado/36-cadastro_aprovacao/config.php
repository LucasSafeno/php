<?php 
try{
    $pdo = new PDO("mysql:dbname=cadastros;host=localhost", "root","root");
}catch(PDOException $e){
    die($e->getMessage());
}

?>