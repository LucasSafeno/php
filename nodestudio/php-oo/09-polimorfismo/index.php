<?php 
class Animal{
	public function Andar(){
		echo "O animal andou";
	}

	public function Correr(){
		echo "O animal Correu";
	}
}// Animal

class Cavalo extends Animal{
	// Polimorfismo - reescrever método herdado
	public function Andar(){
		echo "O cavalo andou";
	}
}

$animal = new Cavalo();
$animal->Andar();

 ?>