<?php 
require 'config.php';


if(!empty($_POST['email'])){
    $email = $_POST['email'];

    $sql = "SELECT * FROM usuarios WHERE email = :email ";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":email", $email);
    $sql->execute();

    if($sql->rowCount() > 0){
        $sql = $sql->fetch();
        $id = $sql['id'];

        $token =  md5(time().rand(0, 99999).rand(0, 9999));

        $sql = "INSERT INTO usuarios_token (id_usuario, token, expirado_em) VALUES (:id_usuario, :token, :expirado_em)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_usuario", $id);
        $sql->bindValue(":token", $token);
        $sql->bindValue(":expirado_em", date('Y-m-d H:i', strtotime('+2 months')));
        $sql->execute();

        $link = "http://localhost/php/phpProfissionalB7web/05-php-Avancado/37-esqueci_senha/redefinir.php?token=".$token;

        $mensagem =  "Acesso seu email e verifique e clico no link para redefinir sua senha : <br />".$link;
        
        $assunto = "Redefina sua senha";
        $headers = 'From: lucastenorio.ti@gmail.com'."\r\n".
                    'X-Mailer: PHP/'.phpversion();

                //mail($email, $assunto, $mensagem, $headers);
        echo $mensagem;

    }
}
?>

<form action="" method="post">
    Qual seu email :  <br>
    <input type="email" name="email" id=""> <br> <br>

    <input type="submit" value="Enviar">
</form>