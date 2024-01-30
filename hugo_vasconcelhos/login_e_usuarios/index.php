<?php 
require_once("conexao.php");

$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$linhas = count($res);
$senha = 123;
$senha_crip = md5($senha);

if($linhas == 0){
  $query = $pdo->query("INSERT INTO usuarios SET nome = '$nome_sistema', email = '$email_sistema', senha = '$senha', senha_crip = '$senha_crip', nivel = 'Administrador', ativo = 'Sim'  ");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Titulo do Sistema</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/icone.png">
</head>
<body>
  <div class="login">
    <div class="form">
      <img src="img/logo.png" class="imagem">
      <form method="POST" action="autenticar.php">
        <input type="email" name="usuario" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">

        <button>Login</button>
      </form>
    </div> <!-- form !-->
  </div> <!-- Login !--> 
</body>
</html>