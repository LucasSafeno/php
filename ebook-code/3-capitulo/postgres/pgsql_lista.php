<?php 
// Abre conexão com Postgres
$conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=root");

// define consulta que será realizada
$query = "SELECT codigo,nome FROM livro";

//envia consulta para banco de dados

$result = pg_query($conn, $query);


if($result){
    // pecorre resultado da pesquisa
    while($row = pg_fetch_assoc($result)){
        echo $row['codigo']. ' - '. $row['nome']."<br>";
    }
}

// fecha conexão

pg_close($conn);