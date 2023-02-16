<?php 

class Veiculo{
	protected $modelo;
	public $cor;
	public $ano;

	public function Andar(){
		echo "Andou <br>";
	}// Andar

	public function Parar(){
		echo "Parou <br>" ;
	}// Parar

	public function setModelo($m){
		$this->modelo = $mo;
	}

	public function getModelo(){
		return $this->modelo;
	}

}// Veiculo

class Carro extends Veiculo{
	public function ligarLimpador(){
		echo "Limpador Ligado";
	}

} // Carro


$veiculo = new Veiculo();
$veiculo->setModelo("Gol");
$veiculo->getModelo();


 ?>