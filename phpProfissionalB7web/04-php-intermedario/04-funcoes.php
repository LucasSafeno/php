<?php 
function somarNumero($x, $y){
   // $conta = $x + $y;

    // return $conta;
     return $x + $y;
}

function mostrarNome(){
    // echo "Lucas"; -> não retorna nada, deve-se usar o return
    return "Lucas";
}

$resultado = somarNumero(10,20);

echo "Resultado : ". $resultado;
echo "<br>";
echo mostrarNome();
?>