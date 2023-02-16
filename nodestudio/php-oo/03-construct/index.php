<?php 

class Login{
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome){
		$this->nome = $nome;
		$this->setEmail($email);
		$this->setSenha($senha);
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}



	public function Logar(){
		if($this->email  == "teste@teste.com" and $this->senha == "123456") {
			echo "Logado com sucesso ". $this->getNome();
		}else{
			echo "Dados incorretos";
		}
	}//Logar
}//Login

$logar = new Login("teste@teste.com", "123456", "Lucas");
$logar->Logar();
 ?>