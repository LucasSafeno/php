<?php 
// insere classe
include_once 'Produto.class.php';

// Cria um objeto
$produto = new Produto();
$produto2 = new Produto();

// atribuir valores
$produto->codigo =  4001;
$produto->descricao = 'CD - The best of Eric Clapton';

$produto2->codigo = 4002;
$produto2->descricao = 'CD - The best of Hotel California';


$produto->imprimeEtiqueta();
$produto2->imprimeEtiqueta();

?>