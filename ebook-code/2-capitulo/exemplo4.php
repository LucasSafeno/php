<?php 
// interpreta documento xml
$xml = simplexml_load_file('paises.xml');


echo "Nome : ". $xml->nome . "<br>";
echo "Idioma  :". $xml->idioma. "<br>";


echo "*** Informações Geográficas ***";
echo "<br>";
echo "Clima : ". $xml->geografia->clima . "<br>";
echo "Costa : ". $xml->geografia->costa . "<br>";
echo "Pico : ". $xml->geografia->pico . "<br>";

?>