<?php 
include_once 'classes/Funcionario.class.php';
include_once 'classes/Estagiario.class.php';

// Cria objeto funcionario
$lucas = new Funcionario();
$lucas->nome = 'Lucas';

// Cria objeto estagiario
$ze = new Estagiario();
$ze->nome = 'Zé';

// Imprime os nomes

echo $lucas->nome. "<br>";
echo $ze->nome;


?>