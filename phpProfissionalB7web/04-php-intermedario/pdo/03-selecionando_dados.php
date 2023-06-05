<?php 

$dsn    = "mysql:dbname=blog;host=localhost";
$dbuser = "safeno";
$dbpass = "root";

    try{
        $pdo = new PDO($dsn, $dbuser,$dbpass);
        
        // Selecionando Dados
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);

            if($sql->rowCount() > 0){
                
                foreach($sql->fetchAll() as $usuario){
                    echo "Nome: ".$usuario['nome']."<br>";
                    echo "E-mail: ". $usuario['email']."<br>";
                    echo "<hr>";
                }


            }else{
                echo "Não há usuários cadastrados";
            }

    }catch(PDOException $e){   
        echo "Falhou:".$e->getMessage();
    }

?>