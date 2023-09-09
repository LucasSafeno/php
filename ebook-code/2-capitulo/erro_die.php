<?php 


function abrir($file = null){
    if(!$file){
        die('Falta o parametro com o nome do arquivo');
    }

    if(file_exists($file)){
        die('arquivo não existe');
    }

    if(!$retorno  = @file_get_contents($file)){
        die('Impossível ler o arquivo');
    }

    return $retorno;
}


// Abrir um arquivo

$arquivo = abrir('readme.txt');
echo $arquivo;

?>