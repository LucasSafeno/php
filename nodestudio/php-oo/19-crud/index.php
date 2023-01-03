<?php

require_once("vendor/autoload.php");

$produto = new \App\Model\Produto();
$produto->setNome("Mouse");
$produto->setDescricao("Mouse Game");

$produtoDao = new \App\Model\ProdutoDao();
//produtoDao->create($produto);
$produtoDao->read();

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;