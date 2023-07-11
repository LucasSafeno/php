<?php 
session_start();
require 'config.php';

if(!empty($_GET['codigo'])){
    $codigo = addslashes($_GET['codigo']);

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE codigo = :codigo");
    $sql->bindValue(":codigo", $codigo);
    $sql->execute();

    if($sql->rowCount() == 0){
        header("Location: login.php");
        exit;
    }
}else{
    header("Location: login.php");
}


if(isset($_POST['usuario']) && empty($_POST['usuario']) == false){
    $email = addslashes($_POST['usuario']);
    $senha = md5(addslashes($_POST['senha']));
    $codigo = md5(time().rand(1,99));

    $sql = $pdo->prepare("INSERT INTO usuarios SET email = :email, senha = :senha, codigo = :codigo");
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", $senha);
    $sql->bindValue(":codigo", $codigo);
    $sql->execute();

    header("Location: index.php");

}

?>

<form method="post">
    Usuario : <br>
    <input type="text" name="usuario"> <br> <br>  

    Senha : <br>
    <input type="password" name="senha"> <br> <br>

    <input type="submit" value="Cadastrar">
</form>