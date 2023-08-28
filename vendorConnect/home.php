<?php include_once 'pages/header.php'; ?>
<?php 
if(!isset($_SESSION['id'])){
    header("Location: /");
}
?>

<div class="container">


    <h1>Opções</h1>
</div>

<?php include_once 'pages/footer.php' ?>