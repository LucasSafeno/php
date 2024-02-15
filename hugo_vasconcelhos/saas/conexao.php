<?php 

// Variaveis

$banco		=	"sas";
$usuario	=	"root";
$senha		=	"root";
$servidor	=	"localhost";


date_default_timezone_set("America/Recife");

try {
	
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8", $usuario, $senha);

} catch (Exception $e) {
	echo "Error nos dados de conexão com banco! <br>".$e->getMessage();
}

?>