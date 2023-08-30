<?php include_once 'pages/header.php'; ?>
<?php 
if(!isset($_SESSION['id'])){
    header("Location: /");
}
?>

<div class="container">
    <section id="cadastrar-container">
        <div class="icon">
            <i class="fa-solid fa-plus"></i>
        </div>
        <div class="cadastrar-title">
        <a href="cadastrar.php">Cadastrar Fornecedor</a>
        </div>
    </section>

    <section id="editar-container">
        <div class="icon">
            <i class="fa-solid fa-pen-to-square"></i>
        </div>
        <div class="editar-title">
            <a href="editar.php">Editar Fornecedor</a>
        </div>
    </section>

</div>

<?php include_once 'pages/footer.php' ?>