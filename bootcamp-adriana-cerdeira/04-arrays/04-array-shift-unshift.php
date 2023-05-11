<?php 

$array_exemplo = [1,2,3,4,5,6,7,8,9];

# array_shift Retirar primeiro elemento do Array
array_shift($array_exemplo); 

echo "<pre>";
print_r($array_exemplo);
echo "</pre>";

echo "<hr>";
echo "<br><br>";

# array_unshift -> Colocar um valor novo no array
array_unshift($array_exemplo, 1, "olha mais um valor");
echo "<pre>";
print_r($array_exemplo);
echo "</pre>";


?>