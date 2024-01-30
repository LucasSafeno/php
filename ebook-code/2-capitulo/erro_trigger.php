<?php   
function abrir($file = null){
    if(!$file){
        trigger_error('Falta parametro com nome do arquivo', E_USER_NOTICE);
        return false;
    }

    if(!file_exists($file)){
        trigger_error('Arquivo não existe', E_USER_ERROR);
        return false;
    }

    if(!$retorno = @file_get_contents($file)){
        trigger_error('Impsosível ler arquvivo', E_USER_WARNING);
        return false;
    }

    return $retorno;
}

// Função para manipular erro
function manipula_erro($numero, $mensagem, $arquivo, $linha){
    $mensagem = "O $arquivo : Linha : $linha # no $numero : $mensagem";

    // Escreve log todo tipo de erro
    $log = fopen('erros.log', 'a');
    fwrite($log, $mensagem);
    fclose($log);

    // Se for warning
    if($numero == E_USER_WARNING){
        echo $mensagem;
    }
    // se for erro fatal

    if($numero == E_USER_ERROR){
        echo $mensagem;
        die;
    }

    // define função a função manipula_erro como manipuladora dos erros
    set_error_handler('manipula_erro');

    // Abrindo arquivo
    $arquivo = abrir('arquivo.dats');
    echo $arquivo;

}

?>