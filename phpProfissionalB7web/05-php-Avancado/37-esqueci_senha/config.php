<?php 
try{
    $pdo = new PDO("mysql:dbname=projeto_esquecisenha;host=localhost", "root","root");
}catch(PDOException $e){
    die($e->getMessage());
}

?>