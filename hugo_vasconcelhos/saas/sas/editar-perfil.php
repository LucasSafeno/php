<?php 
require_once("../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$id = $_POST['id_usuario'];
$senha_crip = md5($senha);

if($senha != $conf_senha){
	echo "As senhas não coincidem";
	exit();
}

$query = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, telefone = :telefone, senha = :senha, senha_crip = '$senha_crip', cpf = :cpf, endereco = :endereco WHERE id = '$id' ");
$query->bindValue(":nome", $nome);
$query->bindValue(":email", $email);
$query->bindValue(":telefone", $telefone);
$query->bindValue(":senha", $senha);
$query->bindValue(":cpf", $cpf);
$query->bindValue(":endereco", $endereco);
$query->execute();
echo 'Editado com Sucesso'; 

 ?>