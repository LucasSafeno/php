<?php 

$array_a_ser_cortado = [1,2,3,4,5];

// transformando em string
$array_para_string = implode(",", $array_a_ser_cortado);

echo '<br>';
print_r($array_para_string);
echo '<br>';


$meu_string = '0,1,2,3,4,5';
$string_para_array = explode(',', $meu_string);


echo '<br>';
print_r($string_para_array);
echo '<br>';

# Contando elementos do array
    echo count($array_a_ser_cortado);
    echo '<br>';
    echo sizeof($array_a_ser_cortado);


?>