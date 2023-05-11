<?php 
$array_simples = [
    "Lucas",
    "Tenorio",
    1994
];

$array_associativo = [
    "nome" => "Lucas",
    "sobrenome" => "Tenorio",
    "idade" => 1994
];

// Funções uteis

$array_exemplo = [1,2,3,4];

// unset - retira um elemento do array
// unset($array_exemplo[0]);

// u
// echo "</pre>";

// echo "<hr>";

// sort  -> Ordenar 
// $array_ordenar = [3,2,4,1];
// sort($array_ordenar );

// print_r($array_ordenar);
 

// pop -> retira o ultimo elemento do array

// $array_pop = array_pop($array_exemplo);

// echo "<pre>";
// var_dump($array_pop);
// echo "</pre>";


// array_push -> insere  elemento no array

array_push($array_exemplo, "Primeiro valor", "Segundo valor");
echo "<pre>";
var_dump($array_exemplo);
echo "</pre>";

?>