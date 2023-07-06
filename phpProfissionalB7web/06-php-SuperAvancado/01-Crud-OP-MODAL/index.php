<!DOCTYPE html>
<html>
    <head>
        <title>Site Contato</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script  type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <h1>Contatos</h1> <br>
            <a href="adicionar.php" class="modal_ajax">[ ADICIONAR ]</a>
            <br> <br>
            <?php 
            require 'Usuarios.class.php' ;
            $u = new Usuarios();

            $dados = $u->getContatos();

            ?>

            <table border="1" width="600">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($dados as $dado):?>
                <tr>
                    <td><?php echo $dado['id'];?></td>
                    <td><?php echo $dado['nome'];?></td>
                    <td><?php echo $dado['email'];?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $dado['id'];?>" class="modal_ajax">[ EDITAR ]</a>
                        <a href="excluir.php?id=<?php echo $dado['id'];?>">[ EXCLUIR ]</a>
                    </td>
                </tr>
                <?php endforeach; ?>

            </table>
            
           
                <div class="modal_bg">
                    <div class="modal">

                    </div>
                </div>


            
        </body>
</html>

