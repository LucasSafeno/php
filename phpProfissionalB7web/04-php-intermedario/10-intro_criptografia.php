<?php 

$nome   = "Lucas";
$nome2  = md5($nome); // irrevesivél
$nome3  = base64_encode($nome);

echo "Nome Original :".$nome."<br>";
echo "Nome Cripto MD5 :".$nome2."<br>";
echo "Nome Cript base :".$nome3."<br>";
// decode base64
echo "Nome decode :".base64_decode($nome3);

?>