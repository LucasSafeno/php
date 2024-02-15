<?php 
require_once("../conexao.php");

$nome_sistema = $_POST['nome_sistema'];
$email_sistema = $_POST['email_sistema'];
$telefone_sistema = $_POST['telefone_sistema'];
$tipo_rel = $_POST['tipo_rel'];




//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = @$_FILES['foto-logo']['name'];
$caminho = '../img/logo.png';

$imagem_temp = @$_FILES['foto-logo']['tmp_name']; 

if(@$_FILES['foto-logo']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' ){ 
		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida, somento imagem PNG';
		exit();
	}
}

$nome_img = @$_FILES['foto-icone']['name'];
$caminho = '../img/icone.png';

$imagem_temp = @$_FILES['foto-icone']['tmp_name']; 

if(@$_FILES['foto-icone']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' ){ 
		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida, somento imagem PNG';
		exit();
	}
}


$nome_img = @$_FILES['foto-logo-rel']['name'];
$caminho = '../img/logo-rel.jpg';

$imagem_temp = @$_FILES['foto-logo-rel']['tmp_name']; 

if(@$_FILES['foto-logo-rel']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'jpg' ){ 
		
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida, somento imagem PNG';
		exit();
	}
}



$query = $pdo->prepare("UPDATE config SET nome_sistema = :nome_sistema, email_sistema = :email_sistema, telefone_sistema = :telefone_sistema, tipo_rel = '$tipo_rel'  WHERE empresa = 0 ");
$query->bindValue(":nome_sistema", $nome_sistema);
$query->bindValue(":email_sistema", $email_sistema);
$query->bindValue(":telefone_sistema", $telefone_sistema);
$query->execute();
echo 'Editado com Sucesso'; 

 ?>