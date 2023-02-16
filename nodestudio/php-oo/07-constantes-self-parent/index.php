<?php 
class Pessoa{
	const nome = "Lucas";

	public function exibirNome(){
		echo self::nome;
	}

} // Pessoa

class Lucas extends Pessoa{

	const nome = "Tenório";

	public function exibirNome(){
		echo parent::nome;
	}

}


$lucas = new Lucas();
$lucas->exibirNome();
 ?>
