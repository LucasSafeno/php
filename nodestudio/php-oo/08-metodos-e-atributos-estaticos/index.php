<?php 
class Login{

	public static $user;

	// Metodos estaticos não precisa instancia a classe
	public static function verificaLogin(){
		echo "O usuário".self::$user." está logado";
	}


	public function sairSistema(){
		echo "O usuário deslogou";
	}

}// Login

$login = new Login();
Login::$user = "admin";
Login::verificaLogin();
$login->sairSistema();

 ?>