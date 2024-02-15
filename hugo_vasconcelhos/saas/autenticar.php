<?php 
session_start();
require_once("conexao.php");

$usuario	=	$_POST['usuario'];
$senha		=	$_POST['senha'];
$senha_crip	=	md5($senha);

$query = $pdo->prepare("SELECT * FROM usuarios WHERE (email = :usu OR cpf = :usu) AND senha_crip = :senha ");
$query->bindValue(":usu", $usuario);
$query->bindValue(":senha", $senha_crip);
$query->execute();
$res = $query->fetch(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg > 0){
	$_SESSION['id'] = $res['id'];
	$_SESSION['nome'] = $res['nome'];

	echo $_SESSION['nome'];
}else{
	echo '<script>alert("Dados incorretos");</script>';
	echo '<script>window.location="index.php"</script>';
}


?>