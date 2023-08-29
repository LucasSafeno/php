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

<?php 
        $cep = "54100290";

        
        $url  =  'viacep.com.br/ws/'.$cep.'/json/';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_exec($ch);


        $info = file_get_contents("https://".$url);

        $cidade = json_decode($info, true);

       
        
        
        

?>

</div>

<?php include_once 'pages/footer.php' ?>