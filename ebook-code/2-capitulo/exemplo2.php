<?php 
// interpreta documento xml
$xml = simplexml_load_file('paises.xml');


// Imprime os atributos do objeto criado

echo "Nome : ".$xml->nome."<br>";
echo "Idioma : ".$xml->idioma."<br>";
echo "Religião : ".$xml->religiao."<br>";
echo "Moeda : ".$xml->moeda."<br>";
echo "População : ".$xml->populacao."<br>";

?>