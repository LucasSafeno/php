<?php 
include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

$lucas = new Estagiario();
$lucas->setSalario(248);

echo "O salário de Lucas é  R$: ". $lucas->getSalario();

?>