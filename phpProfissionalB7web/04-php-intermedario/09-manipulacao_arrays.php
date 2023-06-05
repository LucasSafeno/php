<?php 

   $array = array(
            "nome" => "Lucas",
            "idade" => 28,
            "cidade" => "Recife",
            "pais" => "Brasil"
        );
    // array_keys -> retorna um array só com as chaves do array
   // $array2 = array_keys($array);
   // print_r($array2);


   // array_values -> retorna um array só com as valores do array
    // $array2 = array_values($array);
    // print_r($array2);

    // array_pop -> remove o ultimo registro do array
      // array_pop($array);
      // print_r($array);

    // array_shift -> remove o primeiro registro do array
        // array_shift($array);
        // print_r($array);

    // asort -> mantendo associção e valores
    // arsort -> mantendo associção e valores( invertido)
        // arsort($array);
        // print_r($array);

    // count -> quantos registro já no arra
    $array3 = array("Lucas", "Thauanna","Fulano");
       echo "Total de Alunos:". count($array3);  


?>