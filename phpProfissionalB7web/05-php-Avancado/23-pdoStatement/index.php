<?php 
require 'usuarios.php';

$u = new Usuarios();

// $res = $u->selecionar(1);
// print_r($res);

//$u->inserir("Teste Adicionar","add@adicionar.com", "123");

//$u->atualizar("Adicionar 2","add@adicionar.com", "123",6);

$u->excluir(6);


?>
