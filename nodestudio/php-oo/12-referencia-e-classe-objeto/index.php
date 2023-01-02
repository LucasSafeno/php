<?php
class Pessoa{
    public $idade;

    public function __clone(){
        echo "Clonagem de objetos";
    }
}
$pessoa = new Pessoa();
$pessoa->idade = 28;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 23;


echo $pessoa->idade;


?>