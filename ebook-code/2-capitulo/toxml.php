<?php
class Cachorro{

    #metodo construct
    function __construct($nome, $idade, $raca)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }

    # toXml, retorna o objeto no formato XML
    function toXml(){
        return 
        <<<XML
        <cachorro>
            <nome>{$this->nome}</nome>
            <idade>{$this->idade}</idade>
            <raca>{$this->raca}</raca>
        </cachorro>
        XML;
    }
}

$toto = new Cachorro('Toto', 2, 'SRD');
$vava = new Cachorro('Vava',4,'Pastor Alemão');

echo $toto->toXml();
echo "<br>";
echo $vava->toXml();
?>