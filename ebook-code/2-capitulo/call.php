<?php 
include_once 'classes/Produto.class.php';

# Cria novo produto com preço de 345,67
$produto = new Produto(1, 'Pen Drive', 1, 345,67);

# Executa metodo vender() passando 10 como parametro
$produto->vender(10);

?>