<?php 

$array1 = ['nome' => 'Lucas', 'sobrenome' => 'Tenorio'];
$array2 = ['sobrenome' => 'Tenorio', 'nome' => 'Lucas'];
$array_problema = ['nome' => 'ops', 'idade' => 28];
$array_novo = ['web dev', 1994, 6];
$array_simples = ['Esse vai?', 'Será', 'é o terceiro', 'mas o quarto foi ?'];

$uniao = $array1 + $array_novo;


echo 'União <br>';
var_dump($uniao);
echo '<br>';

?>