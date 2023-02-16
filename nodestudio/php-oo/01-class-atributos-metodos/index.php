<?php 

class Pessoa{
	public $nome;
	public $idade;

	public function Falar(){
		echo $this->nome." de ".$this->idade." anos Falou <br>";
	}
}


$lucas = new Pessoa();
$lucas->nome = "Lucas";
$lucas->idade = 28;
$lucas->Falar();

	

 ?>