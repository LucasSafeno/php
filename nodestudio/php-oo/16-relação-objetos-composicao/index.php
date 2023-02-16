<?php
class Pessoa{

    public function atribuiNome($nome){
        return "O nome da pessoa é ". $nome;
    }
}// Pessoa


class exibe{
    public $pessoa;
    public $nome;

    public function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
} // exibe

$exibe = new Exibe("Lucas");
$exibe->exibeNome();

?>