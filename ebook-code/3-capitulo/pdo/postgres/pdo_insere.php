<?php 
// instancia do objeto PDO, conectando via postres
$conn = new PDO('pgsql:dbname=livros;user=postgres;password=root;host=localhost');
//Executa uma serie de instruções SQL
$conn->exec("INSERT INTO famoso (codigo, nome) VALUES (1, 'Eriko Veríssimo')");
$conn->exec("INSERT INTO famoso (codigo, nome) VALUES (2, 'John Lennon')");
$conn->exec("INSERT INTO famoso (codigo, nome) VALUES (3, 'Mahata Gandhi')");

?>