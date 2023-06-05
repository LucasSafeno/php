<?php 

// $nomes = array(
//     array("nome" => "Lucas", "idade" => 28),
//     array("nome" => "Thauanna", "idade" => 23),
//     array("nome" => "Fulano", "idade" => 50),
//     array("nome" => "Beltrano", "idade" => 92),
//     array("nome" => "Cicrano", "idade" => 102),
// );

// foreach($nomes as $aluno){
//     echo "Aluno: ".$aluno['nome']." - Idade:".$aluno['idade']. "<br>";
// }

    $aluno = array(
        "nome" => "Lucas",
        "idade" => 28,
        "estado" => "PE",
        "pais" => "Brasil"
    );

        foreach($aluno as $chave => $dado){
            echo $chave. " = ".$dado."<br>";
        }

?>