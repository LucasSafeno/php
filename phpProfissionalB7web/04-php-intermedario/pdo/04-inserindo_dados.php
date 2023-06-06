<?php 

$dsn    = "mysql:dbname=blog;host=localhost";
$dbuser = "safeno";
$dbpass = "root";

    try{
        $pdo = new PDO($dsn, $dbuser,$dbpass);

        $nome = 'Teste2';
        $email = 'teste@email.com';
        $senha = md5('123');

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' ";
        $sql = $pdo->query($sql);

        echo "Usuário inserido".$pdo->lastInsertId();


    }catch(PDOException $e){   
        echo "Falhou:".$e->getMessage();
    }

?>