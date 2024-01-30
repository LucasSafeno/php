<?php 
class Cachorro{
    private $nascimento;

    # Método construct
    function __construct($nome){
        $this->nome = $nome;
    }

    # tostring, sempre executado que o objeto for impresso
    function __toString()
    {
        return $this->nome;
    }
}

$toto = new Cachorro('Toto');
$vava = new Cachorro('Vava');

echo $toto;
echo "<br>";
echo $vava;
?>