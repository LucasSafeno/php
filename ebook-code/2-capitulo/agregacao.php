<?php 
include_once 'classes/Cesta.class.php';
include_once 'classes/Produto.class.php';

$produto1 = new Produto();
$produto2 = new Produto();
$produto3 = new Produto();
$produto4 = new Produto();


$produto1->codigo = 1;
$produto1->descricao = 'Ameixa';
$produto1->preco = 1.40;

$produto2->codigo = 2;
$produto2->descricao = 'Morango';
$produto2->preco = 2.40;

$produto3->codigo = 3;
$produto3->descricao = 'Abacaxi';
$produto3->preco = 2.24;

$produto4->codigo = 4;
$produto4->descricao = 'Laranja';
$produto4->preco = 1.14;

$cesta = new Cesta();
$cesta->adicionaItem($produto1);
$cesta->adicionaItem($produto2);
$cesta->adicionaItem($produto3);
$cesta->adicionaItem($produto4);


$cesta->calculaTotal();
echo "<br>";
echo $cesta->exibeLista();


?>