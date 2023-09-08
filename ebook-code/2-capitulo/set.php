<?php 
#inclui classe cachorro
include_once 'classes/Cachorro.class.php';

$toto = new Cachorro('Toto');
$toto->nascimento = '3 de março'; // atribuição inválida
echo "<br>";
$toto->nascimento = '10/04/2005'; // atribuição correta

?>