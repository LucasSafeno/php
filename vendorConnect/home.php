<?php include_once 'pages/header.php'; ?>
<?php 
if(!isset($_SESSION['id'])){
    header("Location: /");
}

?>

<?php include_once 'pages/footer.php' ?>