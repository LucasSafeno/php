<?php 
abstract class Banco{ // abstract não pode ser instanciada, apenas herdadas
	protected $saldo;
	protected $limiteSaque;
	protected $juros;

	public function setsaldo($s){
		$this->saldo = $s;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	// metodos abstrados são obrigados a ser criadas nas classes herdadas
	abstract protected function Sacar($s);
	abstract protected function Depositar($d);

} // Banco

class Itau extends Banco{
	public function Sacar($s){
		$this->saldo -= $s;
		echo "<hr> Sacou:".$s;
	}

	public function Depositar($d){
		$this->saldo += $d;
		echo "<hr> Depositou :".$d;
	}

} // Itau


$itau = new Itau();
$itau->setSaldo(1000);
$itau->Sacar(250);
echo "<hr> Saldo :".$itau->getSaldo();
$itau->Depositar(200);
echo "<hr> Saldo :".$itau->getSaldo();


 ?>