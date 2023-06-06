<?php 
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "safeno";
$dbpass = "root";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $id = 1;
    $novonome = "Teste Bind";

    $sql = "UPDATE usuarios SET nome = :nome WHERE id = :id";
   
    $sql = $pdo->prepare($sql); // apos prepare, o sql se transforma numa classe herdando funções do  PDO
    $sql->bindValue(':nome', $novonome);
    $sql->bindValue(':id', $id);
    $sql->execute();

    echo "Usuário atualizado com sucesso";

    

}catch(PDOException $e){
    echo "FALHA : ".$e->getMessage();
}


?>