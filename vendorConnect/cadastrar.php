<?php include_once 'pages/header.php'; ?>
<?php 
if(!isset($_SESSION['id'])){
    header("Location: /");
}
?>


<div class="container">
    <div class="formulario-container">
        <h1>Cadastrar</h1>

        <form id="formulario_cadastro" method="POST">
            <div class="form-control">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj">
            </div>

            
            <div class="form-control">
                <input class="btn" type="submit" value="Procurar">
            </div>
        </form>

    </div>

</div>


<?php include_once 'pages/footer.php' ?>