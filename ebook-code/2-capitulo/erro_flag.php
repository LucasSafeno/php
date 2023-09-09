<?php 


function abrir($file = null){
    if(!$file){
        return false;
    }

    if(file_exists($file)){
        return false;
    }

    if(!$retorno  = @file_get_contents($file)){
        return false;
    }

    return $retorno;
}


// Abrir um arquivo

$arquivo = abrir('readme.txt');


// Verificadndo se abriu arquivo
if(!$arquivo){
    echo 'Falha ao abrir arquivo';
}else{
    echo $arquivo;
}

?>