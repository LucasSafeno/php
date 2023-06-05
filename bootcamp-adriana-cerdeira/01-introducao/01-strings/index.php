<?php

// Explode - Separa os elementos pelo delimitador em elementos de um array
$nome = "lUCAS Tenório teste";
$profissao = "Web Dev";

$novo = "Meu nome é $nome e o sou {2+2s";
$lista = explode(" ", $novo);
//var_dump($lista);

// strtoupper - transforma todas as letras em maisculas
//echo mb_strtoupper($nome, "utf-8". "<br>");


// strtolower - transforma todas as letras em menusculas
//echo mb_strtolower($nome, "utf-8". "<br>");

// strlen -  comprimento de string
//echo strlen($nome. "<br>");

// ucfrist - primeira letra da string maiscula
echo ucfirst($nome. "<br>");

//ucwords - primeira letra de cada cadeia de caracteres em MAISCULO
echo ucwords($nome). "</br>";

// substr - retorna um pedaço da string
echo substr($nome, 5);
echo "<br>";

// implode - juntar os elementos de um array em uma string
$array_simples = [
    "Lucas",
    28
];
var_dump(implode(", ", $array_simples));

echo "<br>";

// strpos - Encontra a primeira ocorrência em uma string
echo strpos($profissao, "D");








?>