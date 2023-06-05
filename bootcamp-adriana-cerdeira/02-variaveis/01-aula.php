<?php 

$variavel = 1 + 3;

$variavel2 = $variavel;

echo $variavel;
echo "<br>";
echo $variavel2;

// Escopo
echo "<hr>";

$variavelGlobal = "Variavel Global";

function teste(){
    $variavelEscopo = "Varaive lEscopo";
}

?>