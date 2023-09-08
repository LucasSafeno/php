<?php 
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';

class ContaCorrenteEspecial extends ContaCorrente{
    function depositar($valor){
        echo "Sobrescrevendo metodo depositar <br>";
        parent::depositar($valor);
    }

    function transferir($conta, $valor){
        echo "Sobrescrevendo metodo transferir <br>";
        parent::transferir($conta, $valor);
    }
}


?>