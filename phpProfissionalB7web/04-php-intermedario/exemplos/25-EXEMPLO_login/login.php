<?php 
    session_start();

    if(isset($_POST['email']) && empty($_POST['email']) == false){
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $dsn = "mysql:dbname=blog;host=localhost";
        $dbuser = "safeno";
        $dbpass = "root";

        try{
            $db = new PDO($dsn, $dbuser, $dbpass);

            $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha =  '$senha'");

            if($sql->rowCount() > 0){
                $dado = $sql->fetch();

                $_SESSION['id'] = $dado['id'];

                header("Location: index.php");

                //print_r($dado);
            }

        }catch(PDOException $e){
            echo "FALHOU ".$e->getMessage();
        }
    }
?>
<form action="" method="post">
    E-Mail <br>
    <input type="email" name="email"><br> <br>

    Senha  <br>
    <input type="password" name="senha"><br> <br>

    <input type="submit" value="Login">
</form>