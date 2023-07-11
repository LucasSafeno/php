<?php 
session_start();
require 'config.php';
require 'classes/Usuarios.class.php';

if(!empty($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    $usuarios = new Usuarios($pdo);

    if($usuarios->fazerLogin($email, $senha)){
        header("Location: index.php");
    }else{
        echo "Usuário e/ou senha errados";
    }

}


?>
<h1>Login</h1>
<form method="post">
    Email : <br>
    <input type="email" name="email" > <br> <br>

    Senha : <br>
    <input type="password" name="senha" > <br> <br>

    <input type="submit" value="Logar">
</form>