<?php 
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaPoupanca.class.php';


$lucas = new Pessoa(10,"Lucas Tenório", 1.75, 29, 72, "Ensino Medio", 650.00 );
$conta = new ContaPoupanca(6677, "CC.1234.56", "10/07/02", $lucas, 9876, 500.00, '10/07');



?>