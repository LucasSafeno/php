<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5">
        <?php if(!isset($info['fotos']) && empty($info['fotos'])):?>
                    <div class="alert alert-warning">Não há fotos</div>
                <?php else: ?>
            <div  id="meuCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
             
                    <?php foreach($info['fotos'] as $chave => $foto): ?>
                        <div class="item <?php echo ($chave=='0')?'active':''; ?>">
                            <img src="<?php echo BASE_URL;?>assets/images/anuncios/<?php echo $foto['url']; ?>" >
                        </div>
                    <?php endforeach;?>
                   
                </div>
                <a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev"> <span> < </span></a>
                <a class="right carousel-control" href="#meuCarousel" role="button" data-slide="next"><span> > </span></a>
                
            </div>
            <?php endif; ?>
        </div>
        <div class="col-sm-7">
            <h1><?php echo $info['titulo']; ?> </h1>
            <h4><?php echo $info['categoria']; ?></h4>
            <p><?php echo $info['descricao']; ?></p>
            <br> <br>
            <h3> R$:<?php echo number_format($info['valor'], 2); ?></h3>
            <h4>Telefone :<?php echo $info['telefone']; ?></h4>

        </div>
    </div>
</div>