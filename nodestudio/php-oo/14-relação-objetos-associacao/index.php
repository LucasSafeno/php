<?php
class Pedido{
    public $numero;
    public $cliente;
}
class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Lucas";
$cliente->endereco = "Rua xxx, numero 25";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome' => $pedido->cliente->nome,
    'endereço' => $pedido->cliente->endereco
);

var_dump($dados);
?>