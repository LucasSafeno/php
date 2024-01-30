<?php 
// interpreta documento XML
$xml = simplexml_load_file('paises.xml');


// exibe informações do objeto criado
echo "<pre>";
var_dump($xml);
echo "</pre>";
?>