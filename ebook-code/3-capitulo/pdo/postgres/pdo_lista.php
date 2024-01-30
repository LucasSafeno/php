<?php 
try{
// instancia do objeto PDO, conectando via postres
$conn = new PDO('pgsql:dbname=livros;user=postgres;password=root;host=localhost');

// executa uma instrução SQL de consulta
$result = $conn->query("SELECT codigo,nome FROM famoso");

if($result){
    // pecorre resultado via iteração
    foreach($result as $row){
        // exibe os resultados
        echo $row['codigo']. ' - '.$row['nome'].'<br>';

        // fecha conexão
        $conn = null;
    }
}
    }catch(PDOException $e){
        print "Erro :".$e->getMessage()."<br>";
        die();
    }
