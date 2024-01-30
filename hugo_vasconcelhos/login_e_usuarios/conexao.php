<?php 
// Definir fuso horário
date_default_timezone_set("America/Recife");


// Parametros Conexão
$servidor = "localhost";
$banco    = "projeto_login";
$usuario  = "root";
$senha    = "root";


try{
  $pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha");
}catch(Exception $e){
  echo "Erro ao conectar ao banco de dados";
  echo "<br>";
  echo $e;
}

# Variaveis Globais
$nome_sistema = "Nome Sistema";
$email_sistema = "lucas@email.com";



?>