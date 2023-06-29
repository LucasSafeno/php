<?php require 'pages/header.php' ?>
<?php 
if(empty($_SESSION['cLogin'])){
    ?>
    <script type="text/javascript">windo.location.href="login.php"</script>
    <?php
    exit;
}

require 'classes/Anuncios.class.php';
$a = new Anuncios();

if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo = addslashes($_POST['titulo']);
    $categoria = addslashes($_POST['categoria']);
    $valor = addslashes($_POST['valor']);
    $descricao = addslashes($_POST['descricao']);
    $estado = addslashes($_POST['estado']);

    $a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);
    ?>

    <div class="alert alert-success">Produto Adicionado com sucesso!</div>

<?php
}

?>

<div class="container">
    <h1>Adicionar novo Anuncio</h1>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                <?php 
                    require 'classes/Categorias.class.php';
                    $c = new Categorias();
                    $cats = $c->getLista();
                    foreach($cats as $cat):
                ?>            
                    <option value="<?php echo $cat['id'];?>"><?php echo $cat['nome']; ?></option>
                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" class="form-control">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="estado">Estado Conservação</label>
            <select name="estado" id="estado" class="form-control">
                <option value="0">Ruim</option>
                <option value="1">Bom</option>
                <option value="2">Ótimo</option>
            </select>
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-default">



    </form>

</div>



<?php require 'pages/footer.php'; ?>