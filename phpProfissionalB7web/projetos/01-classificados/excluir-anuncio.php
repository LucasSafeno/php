<?php 
require 'config.php';
if(empty($_SESSION['cLogin'])){
    header("Location: login.php");
}

require 'classes/Anuncios.class.php';
$a = new Anuncios();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $a->excluir($_GET['id']);
}

header("Location: meus-anuncios.php");
?>