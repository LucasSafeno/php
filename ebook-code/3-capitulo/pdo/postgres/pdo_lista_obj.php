<?php 
try{
// instancia do objeto PDO, conectando via postres
$conn = new PDO('pgsql:dbname=livros;user=postgres;password=root;host=localhost');

// executa uma instrução SQL de consulta
$result = $conn->query("SELECT codigo,nome FROM famoso");

if($result){
    // pecorre resultado via iteração
        while($row = $result->fetch(PDO::FETCH_OBJ)){
            echo $row->codigo. ' - '.$row->nome. "<br>";
        }

}
}catch(PDOException $e){
        print "Erro :".$e->getMessage()."<br>";
        die();
}
