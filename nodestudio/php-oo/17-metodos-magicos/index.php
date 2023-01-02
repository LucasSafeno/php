<?php

class Pessoa{
    private $dados = array();

    public function __set($nome,$valor){
        $this->dados[$nome] = $valor;
    }

    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __tostring(){
        return "Tentei imprimir o obj";
    }

    public function __invoke(){
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Lucas";
$pessoa->idade = 50;
$pessoa->sexo = 'Masculino';

echo $pessoa();