<?php 

$array_exemplo = [1,2,3,4,5,6,7,8,9];

// Slice -> corta array

// $novo_pedaco = array_slice($array_exemplo, 2);
// echo "<pre>";
// print_r($novo_pedaco);
// echo "</pre>";


// $array_associativo = [
//     "zero" => 0,
//     "um" => 1,
//     "dois" => 2,
//     "tres" => 3,
//     "quatro" => 4,
//     "cinco" => 5,
//     "seis" => 6,
//     "sete" => 7,
//     "oito" => 8,
//     "nove" => 9
// ];

// $novo_pedaco = array_slice($array_associativo, 5);

// print_r($novo_pedaco);

$novo_pedaco = array_slice($array_exemplo, 2, 4);
echo "<pre>";
print_r($novo_pedaco);
echo "</pre>"


?>