<h1>Digite email ou cpf do usuário</h1>

<form method="get">
    <input type="text" name="campo" id="">
    <input type="submit" value="Pesquisar">  
</form>

<hr>

<?php 

if(!empty($_GET['campo'])){
    $campo = $_GET['campo'];


    try{
        $pdo = new PDO("mysql:dbname=projeto_pesquisacolunas", "root", "root");
    }catch(PDOException $e){
        die($e->getMessage());
    }

    $sql = "SELECT * FROM usuarios WHERE (email = :email) OR (cpf = :cpf)";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $campo);
    $sql->bindValue(":cpf", $campo);
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();

        echo "Nome : ".$sql['nome'];
    }else{
        echo "Nenhum dado encontrado";
    }


}
?>