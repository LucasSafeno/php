<?php 
require 'Usuarios.class.php' ;
$u = new Usuarios();


if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $u->adicionar($nome, $email);
    header("Location: index.php");
}
?>

<h1>Adicionar</h1>
<form method="post">
    Nome : <br>
    <input type="text" name="nome" > <br> <br>

    Email : <br>
    <input type="email" name="email" > <br> <br>

    <input type="submit" value="Adicionar"> 

</form>