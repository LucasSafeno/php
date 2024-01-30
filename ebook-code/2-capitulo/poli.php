<?php 
# carrega as classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/ContaCorrente.class.php';
include_once 'classes/ContaPoupanca.class.php';

# Criação do objeto Lucas
$lucas = new Pessoa(10, 'Lucas Tenório', 1.75, 29, '14/10/1994', "Ensino Médio", 650.00);

echo "Manipulando objeto {$lucas->nome} : <br>";

# Criação do objeto $lucas_conta
$contas[1] = new ContaCorrente(6677, "CC.1234.56", "10/07/02", $lucas, 9876, 500.00, 200.00);
$contas[2] = new ContaPoupanca(6678, "PP.1234.57", "10/07/02", $lucas, 9876, 500.00, "10/07");

# pecorrendo as contas

foreach($contas as $key => $conta){
    echo "Manipulando a conta $key de {$conta->titular->nome}: <br>";

    echo "Saldo atual da conta $key é de R$ {$conta->obterSaldo()} <br>";
    $conta->depositar(200);

    echo "O saldo atual da conta $key é de R$ {$conta->obterSaldo()} <br>";
    $conta->retirar(100);

    echo "O saldo atual da conta a$key é de R$: {$conta->obterSaldo()} <br>";
}


?>