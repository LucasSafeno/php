
<?php 

// $dataAtual = date("d/m/Y  --  H:i");

// echo $dataAtual;

// echo time(); -> retorna o tempo em segundos desde do inicio da era Unix

$dataproxima = date('d/m/y', strtotime("+10 days"));

echo $dataproxima;


?>