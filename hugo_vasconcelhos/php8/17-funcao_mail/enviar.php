<?php 

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$mensagem   = $_POST['mensagem'];
$assunto    = "Email do site";
$remetente  = "nao-responda@atual.tech";


$cabecalho = "From: ".$email;

mail($remetente, $assunto, $mensagem, $cabecalho);
?>

<script>alet('enviado com sucesso');</script>
<meta http-equiv="refresh" content="0; url=index.php">