<?php 
include_once 'classes/XMLBase.class.php';

class Cachorro extends XMLBase{
    #Metodo construct
    function __construct($nome, $idade, $raca)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }
}

$toto = new Cachorro('Todo', 2, 'SRD');
$vava = new Cachorro('Vava', 4, 'Pastor Alemão');

echo $toto->toXml();
echo $vava->toXml();


?>