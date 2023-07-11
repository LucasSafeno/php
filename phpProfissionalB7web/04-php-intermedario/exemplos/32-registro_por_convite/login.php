<?php 
session_start();
require 'config.php';


if(isset($_POST['usuario']) && empty($_POST['usuario']) == false){
    $email = addslashes($_POST['usuario']);
    $senha = md5(addslashes($_POST['senha']));

   $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
   $sql->bindValue(":email", $email);
   $sql->bindValue(":senha", $senha);
   $sql->execute();

   if($sql->rowCount() > 0){
    $dados = $sql->fetch();
    
     $_SESSION['logado'] = $dados['id'];

    header("Location: index.php");
   }else{
    echo "Usuário não encontrado";
   }


}


?>
<form method="post">
    Usuario : <br>
    <input type="text" name="usuario"> <br> <br>  

    Senha : <br>
    <input type="password" name="senha"> <br> <br>

    <input type="submit" value="Login"> <a href="cadastrar.php">Cadastrar</a>
</form>
