<?php require 'pages/header.php'; ?>
<?php 
require 'classes/Anuncios.class.php';
require 'classes/Usuarios.class.php';
require 'classes/Categorias.class.php';

$a = new Anuncios();
$u = new Usuarios();
$c = new Categorias();

$filtros = array(
      'categoria' => '',
      'preco' => '',
      'estado' => ''
);
if(isset($_GET['filtros'])){
    $filtros = $_GET['filtros'];
}

$total_anuncios = $a->getTotalAnuncios($filtros);
$total_usuarios = $u->getTotalUsuarios();

$p = 1;
if(isset($_GET['p']) && !empty($_GET['p'])){
    $p = addslashes($_GET['p']);
}

$por_paginas = 2;
$total_paginas = ceil($total_anuncios / $por_paginas);

$anuncios = $a->getUltimosAnuncios($p,$por_paginas, $filtros);
$categorias = $c->getLista();
?>


    <div class="container-fluid ">
        <div class="jumbotron"> 

        <?php 
        ?>
            <h2>Nós temos hoje <?php echo $total_anuncios; ?> anúncios </h2>
            <p> E mais de <?php echo $total_usuarios; ?> usuários cadastrados</p>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <h4>Pesquisa avançada</h4>
                <form method="get">

                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select name="filtros[categoria]" id="categoria" class="form-control">
                            <option value=""></option>
                            <?php foreach($categorias as $cat):?>
                                <option value="<?php echo $cat['id']; ?>" <?php echo ($cat['id'] == $filtros['categoria'])?'selected=selected':'';?> ><?php echo $cat['nome']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <select name="filtros[preco]" id="preco" class="form-control">
                            <option value=""></option>
                            <option value="0-50" <?php echo ($filtros['preco'] == '0-50')?'selected=selected':'';?> >R$ 0 -  50 </option>
                            <option value="51-100" <?php echo ($filtros['preco'] == '51-100')?'selected=selected':'';?>>R$ 51 -  100 </option>
                            <option value="101-200" <?php echo ($filtros['preco'] == '101-200')?'selected=selected':'';?> >R$ 101 -  200 </option>
                            <option value="201-500" <?php echo ($filtros['preco'] == '201-500')?'selected=selected':'';?>>R$ 201 -  500 </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select name="filtros[estado]" id="estado" class="form-control">
                            <option value=""></option>
                            <option value="0" <?php echo ($filtros['estado'] == '0')?'selected=selected':'';?> >Ruim</option>
                            <option value="1" <?php echo ($filtros['estado'] == '1')?'selected=selected':'';?>>Bom</option>
                            <option value="2" <?php echo ($filtros['estado'] == '2')?'selected=selected':'';?>>Ótimo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Buscar" class="btn btn-info">
                    </div>

                </form>
            </div>
            <div class="col-sm-9">
                <h4>Últimos Anuncios</h4>
                <table class="table table-striped">
                    <tbody>
                        <?php foreach($anuncios as $anuncio): ?>
                            <tr>
                                <td>
                                    <?php if(!empty($anuncio['url'])):?>
                                        <img src="assets/images/anuncios/<?php echo $anuncio['url'];?>"  height="100" >
                                    <?php else: ?>
                                        <img src="assets/images/default.jpg" height="100">
                                    <?php endif;?>
                                </td>
                                <td>
                                    <a href="produto.php?id=<?php echo $anuncio['id']; ?>"><?php echo $anuncio['titulo']; ?></a> <br>
                                    <?php echo $anuncio['categoria'];?>
                                </td>
                                <td>
                                    R$:<?php echo number_format($anuncio['valor'], 2); ?>
                                </td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <?php for($q=1; $q<=$total_paginas;$q++):?>
                        <li class="<?php echo ($p==$q)?'active': '';?>"><a href="index.php?<?php $w = $_GET; $w['p'] = $q;          echo http_build_query($w);
                         ?>">
                        <?php echo $q?></a></li>
                    <?php endfor;?>
                </ul>
            </div>
        </div>


    </div>
<?php require 'pages/footer.php'; ?>