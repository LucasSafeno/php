<?php 
include_once 'classes/Produto.class.php';

# Cria produto com preço R$ 345,77

$produto = new Produto(1, 'pen drive', 1, 345.67);

# imprime o preço
echo $produto->preco;
?>