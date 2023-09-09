<?php 
// interpreta documento xml
$xml = simplexml_load_file('paises.xml');

// alteração das propriedades
$xml->populacao = '220 milhoes';
$xml->religiao = "Cristianismo";
$xml->geografia->clima = "temperado";

// Adicionar novo nodo
$xml->addChild('presidente', 'Lucas Tenorio');

// Exibe novo XML
echo $xml->asXML();

// Grava no arquivo paises2.xml
file_put_contents('paises2.xml', $xml->asXML());