<?php 

class Veiculo{
	public $modelo;
	public $cor;
	public $ano;

	private function Andar(){
		echo "Andou <br>";
	}// Andar

	public function Parar(){
		echo "Parou <br>" ;
	}// Parar

	public function mostrarAcao(){
		$this->Andar();
	}


}// Veiculo

class Carro extends Veiculo{
	public function ligarLimpador(){
		echo "Limpador Ligado";
	}

} // Carro


$veiculo = new Veiculo();
$veiculo->mostrarAcao();

 ?>