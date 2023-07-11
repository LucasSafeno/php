<?php 
require 'Usuarios.class.php' ;
$u = new Usuarios();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
  
    $dados = $u->getUser($id);

   
}else{
    header("Location: index.php");
}
?>

<form method="post">
    Nome : <br>
    <input type="text" name="nome" value="<?php echo $dados['nome']; ?> " > <br> <br>

    Email : <br>
    <input type="email" name="email" value="<?php echo $dados['email']; ?> "> <br> <br>

    <input type="submit" value="Editar"> 

</form>