<?php require 'pages/header.php'; ?>
<?php 

require 'classes/Anuncios.class.php';
require 'classes/Usuarios.class.php';

$a = new Anuncios();
$u = new Usuarios();

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = addslashes($_GET['id']);
}else{ ?>
    <script type="text/javascript">windo.location.href="login.php"</script>
<?php
    exit;
 }


$info = $a->getAnuncio($id);

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <div class="carousel slide" data-ride="carousel" id="meuCarousel">
                <div class="carousel-inner" role="listbox">
                    <?php foreach($info['fotos'] as $chave => $foto): ?>
                        <div class="item <?php echo ($chave=='0')?'active':''; ?>">
                            <img src="assets/images/anuncios/<?php echo $foto['url']; ?>" >
                        </div>
                    <?php endforeach;?>
                </div>
                <a href="#meuCarousel" class="left carousel-control" role="button" data-slide="prev"><span> < </span></a>
                <a href="#meuCarousel" class="right carousel-control"  role="button" data-slide="next"><span> > </span></a>
            </div>
        </div>
        <div class="col-sm-8">
            ....
        </div>
    </div>
</div>


<?php require 'pages/footer.php'; ?>