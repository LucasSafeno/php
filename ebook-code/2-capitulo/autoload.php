<?php 
# Função de carga automatica
function __autoload($classe){
    # Busca classe no diretório classes
    include_once "classes/{$classe}.class.php";
}

?>