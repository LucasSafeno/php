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
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg > 0){
	$_SESSION['id'] = $res[0]['id'];
	$_SESSION['nome'] = $res[0]['nome'];
	$_SESSION['nivel'] = $res[0]['nivel'];
	$_SESSION['empresa'] = $res[0]['empresa'];

	// armazenar no storage o id
	$id = $res[0]['id'];
	$nivel_usu = $res[0]['nivel'];
	echo "<script>localStorage.setItem('id_usu', '$id')</script>";
	echo "<script>localStorage.setItem('nivel_usu', '$nivel_usu')</script>";

	if($res[0]['ativo'] != 'Sim'){
		echo '<script>alert("Usuário inativo. Contate o administrador");</script>';
		echo '<script>window.location="index.php"</script>';
		exit();
	}

	if($_SESSION['nivel'] == 'SAS'){
		echo '<script>window.location="sas"</script>';	
	}else{
		echo '<script>window.location="sistema"</script>';	
	}


}else{
	echo '<script>alert("Dados incorretos");</script>';
	echo '<script>window.location="index.php"</script>';
	exit();
}


?>