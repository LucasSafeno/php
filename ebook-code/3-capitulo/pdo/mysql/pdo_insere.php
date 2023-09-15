<?php 

try{
    // Instancia do objeto PDO. conectando ao MySQL
    $conn = new PDO("mysql:host=localhost;dbname=livros",'root','');

    //Executa instruções sql
    $conn->exec("INSERT INTO famoso (codigo,nome) VALUES (1, 'Teste 1')");
    $conn->exec("INSERT INTO famoso (codigo,nome) VALUES (3, 'Teste 2')");
    $conn->exec("INSERT INTO famoso (codigo,nome) VALUES (3, 'Teste 3')");

    // fecha conexão

    $conn = null;

}catch(PDOException $e){
    // caso ocorra erro
    echo "ERROR : ".$e->getMessage();
    die();
}


?>