<?php 

// Declarar constantes
define("CONSTANTE", 500);
// CONSTANTE = 'teste'; -> não possível alterar
const CONSTANTE1 = 100;

echo CONSTANTE;
echo "<br>";
echo CONSTANTE1;

$variavel = "Variavel";
echo "<br>";
//const CONST_VARIAVEL = $variavel  -> não funciona
define("CONSTDEF", $variavel);   // -> funciona
echo CONSTDEF;
// Pode definir constante resultados de expressões
echo "<br>";
const OPERACAO = 1 + 1;
echo OPERACAO;





?>