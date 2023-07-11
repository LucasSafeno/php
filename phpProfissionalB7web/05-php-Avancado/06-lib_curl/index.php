<?php 

// iniciar curl
$ch = curl_init();

// indicar url de requesição
curl_setopt($ch, CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Lucas&idade=28&sexo=masculino");

// receber resultados
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


// executar / resposta
$resposta = curl_exec($ch);
// fecha conexão
curl_close($ch);

print_r($resposta);



?>