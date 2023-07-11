<?php 
try{
    $pdo = new PDO("mysql:dbname=projeto_filtrotabelas", "root", "root");
}catch(PDOException $e){
    die($e->getMessage());
}

if(isset($_GET['sexo']) && $_GET['sexo'] != ''){
    $sexo = $_GET['sexo'];

    $sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":sexo", $sexo);
    $sql->execute();


 }else{
    $sexo = '';
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
 }

?>
<form method="get">
    <select name="sexo">
        <option value=""></option>
        <option value="1" <?php echo ($sexo =='1')? 'selected="select"' : ''  ?> >Masculino</option>
        <option value="0" <?php echo ($sexo =='0')? 'selected="select"' : ''  ?>>Feminino</option>
    </select>
    <input type="submit" value="Filtrar">
</form>


<table border="1" width="100%">
    <tr>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
    </tr>

    <?php 

    $sexos = array(
        '1' => 'Masculino',
        '0' => 'Feminino'
    );


     

      if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $usuario): ?>
            <tr>
                <td><?php echo $usuario['nome'];?></td>
                <td><?php echo $sexos[$usuario['sexo']];?></td>
                <td><?php echo $usuario['idade'];?></td>
            </tr>

        <?php
        endforeach;
        } ?>

</table>