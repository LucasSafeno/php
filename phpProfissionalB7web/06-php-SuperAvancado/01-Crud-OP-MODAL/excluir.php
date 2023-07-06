<?php 
require 'Usuarios.class.php' ;
$u = new Usuarios();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $u->excluir($id);
    header("Location: index.php");
   
}else{
    header("Location: index.php");
}



?>