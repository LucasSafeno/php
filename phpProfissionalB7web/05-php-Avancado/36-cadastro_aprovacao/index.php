<?php 
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    require 'config.php';

    $sql->query("INSERT INTO usuarios SET nome = '$nome', email = '$email'");
    $id = $pdo->lastInsertId();

    $md5 = md5($id);
    $link = 'http://atualtech.online/cadastroconfirma/confirmar.php?h'.$md5;

    $assunto = 'Confirme seu cadastro';
    $mensagem = "Clicl no link abaixo para confirmar cadastro\n\n".$link;
    $headers = "From: lucastenorio.ti@gmail.com"."\r\n".
                "X-Mailer: PHP/".phpversion();

    mail($email,$assunto, $mensagem, $headers);

    echo "<h2>Confirma seu cadastro agora</h2>";
    exit;
}

?>


<form action="" method="post">
    Nome : <br>
    <input type="text" name="nome"><br> <br>

    Email : <br>
    <input type="email" name="email"> <br> <br>

    <input type="submit" value="Cadastrar">
</form>