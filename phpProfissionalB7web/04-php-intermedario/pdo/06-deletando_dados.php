<?php 

$dsn    = "mysql:dbname=blog;host=localhost";
$dbuser = "safeno";
$dbpass = "root";

    try{
        $pdo = new PDO($dsn, $dbuser,$dbpass);

        $sql = "DELETE FROM usuarios WHERE id = '5' ";
        $sql = $pdo->query($sql);

        echo "Usuário <b>DELETADO</b> com sucesso";

    }catch(PDOException $e){   
        echo "Falhou:".$e->getMessage();
    }

?>