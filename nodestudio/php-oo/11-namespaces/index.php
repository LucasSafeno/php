<?php
    require 'classes/produto.php';
    require 'models/produto.php';

    use models\Produto as productModel;
    use classes\Produto as productClass;


    $produto = new productClass();
    $produto->mostrarDetalhes();
?>