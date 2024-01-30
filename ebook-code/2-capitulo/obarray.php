<?php 


# criar array dados_lucas

$dados_lucas['nome'] = 'Lucas Tenório';
$dados_lucas['idade'] = 28;
$dados_lucas['profissao'] = 'Full Stack web Developer';

$lucas = new stdClass();
foreach($dados_lucas as $chave => $valor){
    // utilizar variaveis variantes
    $lucas->$chave = $valor;
}

echo "{$lucas->nome} é {$lucas->profissao}";


?>