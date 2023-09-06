<?php 
include_once 'Conta.class.php';
include_once 'Pessoa.class.php';

# criação do objeto $lucas
$lucas = new Pessoa();
$lucas->codigo = 10;
$lucas->nome = 'Lucas Tenório';
$lucas->altura = 1.77;
$lucas->idade = 28;
$lucas->nascimento = '14/10/1994';
$lucas->escolaridade = 'Ensino Médio';

echo "Manipulando o objeto $lucas->nome";

echo "<br>";

echo "{$lucas->nome}  é formado em {$lucas->escolaridade} \n";
$lucas->formar('Técnico Programação');
echo "<br>";
echo "{$lucas->nome} é formado em {$lucas->escolaridade} \n";

echo "<hr>";

echo "{$lucas->nome} possui {$lucas->idade}";
$lucas->envelhecer(1);
echo "<br>";
echo "{$lucas->nome} possui {$lucas->idade}";


# criação do objeto $conta_lucas
$conta_lucas = new Conta();
$conta_lucas->agencia = 6677;
$conta_lucas->codigo = "CC.1234.56";
$conta_lucas->dataCriacao = "01/01/23";
$conta_lucas->titular = $lucas;
$conta_lucas->senha = 9876;
$conta_lucas->saldo = 567.89;
$conta_lucas->cancelada = false;

echo "<hr>";
echo "<br>";

echo "Manipulando a conta de: {$conta_lucas->titular->nome} <br>";
echo "O saldo atual é de R$ {$conta_lucas->obterSaldo()}";

echo "<br>";

$conta_lucas->depositar(20);
echo "O saldo é R$ {$conta_lucas->obterSaldo()}";
echo "<br>";
$conta_lucas->retirar(10);
echo "O saldo é R$ {$conta_lucas->obterSaldo()}";

?>