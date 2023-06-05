<?php 

$array_simples = [
    "Lucas",
    "Tenorio",
    28
];
echo "<pre>";
var_dump($array_simples);
echo "</pre>";
echo "<br>";

$array_associativo = [
    "nome" => "Lucas",
    "sobrenome" => "Tenório",
    "array" => ['Lucas', 1994],
];

echo "<pre>";
var_dump($array_associativo);
echo "</pre>";


echo "<br><br>";
echo $array_associativo['nome']." ".$array_associativo['sobrenome'];    

?>