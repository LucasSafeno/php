<?php 
include_once 'classes/Funcionario.class.php';

$lucas = new Funcionario();
//$lucas->salario = 'Oitocentos e setenta e seis';

// atribui novo salario
$lucas->setSalario(1390);

//obtém salário
echo "Salário : R$: ".$lucas->getSalario();

?>