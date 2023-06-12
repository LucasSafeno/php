<?php 
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $para = "lucastenorio.ti@gmail.com";
    $assunto = "Pergunta Teste";
    $corpo = "Nome : ".$nome." - Email : ".$email." - Mensagem : ".$msg;
    $cabecalho = "From: suporte@atualtech.online"."\r\n".
                 "Replay-To: ".$email."\r\n".
                 "X-Mailer: PHP/".phpversion();

    mail($para, $assunto,  $corpo, $cabecalho);
    echo "<h2> Email Enviado com sucesso</h2>";
    exit;
}
  
    

?>


<form method="post">
    Nome : <br>
    <input type="text" name="nome"> <br> <br>

    E-Mail : <br>
    <input type="email" name="email" > <br> <br>

    Mensagem : <br>
    <textarea name="msg"></textarea> <br> <br>

    <input type="submit" value="Enviar">
</form>