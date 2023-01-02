<?php
class Produtos{
    public $nome;
    public $valor;

    public function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}// Produtos

class Carrinho{
    public $produtos;

    public function adiciona(Produtos $produto){
         $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->nome."<br>";
            echo $produto->valor."<hr>";
        }
    }

}// Carrinho


$produto1 = new Produtos("Notebook", 2000);
$produto2 = new Produtos("Computador Game", 5000);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();

?>