<?php 
include_once 'Conta.class.php';
include_once 'Pessoa.class.php';


# Criação objeto lucas
$lucas = new Pessoa(10, "Lucas Tenório", 1.77, 29, "14/10/1994", "Ensino Médio", 650.00);

echo "Manipulando o objeto {$lucas->nome} <br>";
?>