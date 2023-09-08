<?php 
class Cachorro{
    # Metodo construct
    function __construct($coleira, $nome, $idade, $raca)
    {
        $this->coleira = $coleira;
        $this->nome = $nome;
        $this->idade =  $idade;
        $this->raca = $raca;
    }

    function __clone()
    {
        $this->coleira = $this->coleira +1;
        $this->nome .= ' Junior';
        $this->idade = 0;
    }
}

$toto = new Cachorro(100, 'Toto', 1, 'Fox Terrier');
$vava = clone $toto;

echo "Código : ".$toto->coleira ."<br>";
echo "Nome : ". $toto->nome."<br>";
echo "Idade : ".$toto->idade."anos <br>";

echo "<br>";

echo "Código : ".$vava->coleira ."<br>";
echo "Nome : ". $vava->nome."<br>";
echo "Idade : ".$vava->idade." anos <br>";

?>