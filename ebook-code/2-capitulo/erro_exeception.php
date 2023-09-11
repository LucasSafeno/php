<?php 

function abrir($file = null){
    if(!$file){
        throw new Exception('Falta parametro com nome do arquivo');
    }

    if(!file_exists($file)){
        trigger_error('Arquivo não existe', E_USER_ERROR);
      throw new Exception('Arquivo não existe');
    }

    if(!$retorno = @file_get_contents($file)){
     throw new Exception('Impossivel ler arquivo');
    }

    return $retorno;
}

// Abre arquivo 
// Tratamento exceçções

try{
    $arquivo = abrir('arquivo.dat');
    echo $arquivp;
}catch(Exception $excessao){
    echo $excessao->getFile() . ' : '.$excessao->getLine(). ' # '.$excessao->getMessage();
}

?>