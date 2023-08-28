<?php include_once 'pages/header.php'; ?>
<div class="container">

    <section id="form_login">
        <form action="" method="POST">
            <div class="form-control">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-control">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>

            <div class="form-control">
                    <input class="btn" type="submit" value="Entrar">
            </div>
        </form>

        <?php 
            use App\Usuario;
            $u = new Usuario;

            if(isset($_POST['email']) && !empty($_POST['email'])){
                $u->__set('email', $_POST['email']);
                $u->__set('senha', md5($_POST['senha']));

                if($u->verificaLogin()){
                    $dados = $u->verificaLogin();
                    $_SESSION['id'] = $dados['id'];

                    header("Location: home.php?id=".$_SESSION['id']);
                }else{ ?>
                    <div class="warning">
                        <p>
                            Usuário ou senha incorretos!
                        </p>
                    </div>
                <?php }
            }
        ?>
    </section>


</div>
    
<?php include_once 'pages/footer.php' ?>