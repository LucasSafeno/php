<?php 
session_start();
require "config.php";
if(empty($_SESSION['logado'])){
    header("Location: login.php");
    exit;
}

$email = '';
$codigo = '';
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id ");
$sql->bindValue(":id", $_SESSION['logado']);
$sql->execute();

if($sql->rowCount() > 0){
    $info = $sql->fetch();
    $email = $info['email'];
    $codigo = $info['codigo'];
}


?>

<h1>Área restrita</h1>
<p>Usuário :  <?php echo $email; ?> - <a href="sair.php">Sair</a></p>
<p>Link : http://localhost/php/phpProfissionalB7web/04-php-intermedario/exemplos/32-registro_por_convite/cadastrar.php?codigo=<?php echo $codigo?></p>