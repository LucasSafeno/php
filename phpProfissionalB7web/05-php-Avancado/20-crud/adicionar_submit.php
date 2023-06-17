<?php 
require 'contato.class.php';
$contato = new Contato();


if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $contato->adicionar($email, $nome);

    header("Location: index.php");
}