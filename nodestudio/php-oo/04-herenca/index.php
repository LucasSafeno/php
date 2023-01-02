<?php 

class Veiculo{
	public $modelo;
	public $cor;
	public $ano;

	public function Andar(){
		echo "Andou <br>";
	}// Andar

	public function Parar(){
		echo "Parou <br>" ;
	}// Parar

}// Veiculo

class Carro extends Veiculo{
	public function ligarLimpador(){
		echo "Limpador Ligado";
	}

} // Carro

class Moto extends Veiculo{
	public function darGrau(){
		echo "Dando grau";
	}
}// Moto


$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = "2018";
$carro->Andar();

$moto = new Moto();
$moto->modelo = "Hondda";
$moto->cor = "Branco";
$moto->ano = "2016";
$moto->Andar();



 ?>