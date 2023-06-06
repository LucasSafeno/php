<?php 

$dsn    = "mysql:dbname=blog;host=localhost";
$dbuser = "safeno";
$dbpass = "root";

    try{
        $pdo = new PDO($dsn, $dbuser,$dbpass);

        $sql = "UPDATE usuarios SET email = 'update@update.com' WHERE email = 'lucas@email.com' ";
        $sql = $pdo->query($sql);

        echo "Usuário <b>alterado</b> com sucesso";

    }catch(PDOException $e){   
        echo "Falhou:".$e->getMessage();
    }

?>