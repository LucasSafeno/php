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
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>

            <div class="form-control">
                <label for="email">E-Mail</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="form-control">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone">
            </div>

            <div class="form-control">
                <label for="end_rua">Rua</label>
                <input type="text" name="end_rua" id="end_rua">
            </div>

            
            <div class="form-control">
                <label for="numero">Numero</label>
                <input type="text" name="numero" id="numero">
            </div>

            <div class="form-control">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro">
            </div>

            <div class="form-control">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">
            </div>


            <div class="form-control">
                <label for="estado">Estado</label>
                <input type="text" name="estado" id="estado">
            </div>

            <div class="form-control">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep">
            </div>

            <div class="form-control">
                <input class="btn" type="submit" value="Cadastrar">
            </div>
        </form>

    </div>

</div>


<?php include_once 'pages/footer.php' ?>