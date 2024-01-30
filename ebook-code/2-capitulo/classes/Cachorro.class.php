<?php 
class Cachorro{
    private $nascimento;


    # método constructor
    function __construct($nome){
        $this->nome = $nome;
    }


    # intercepta atribuição
    function __set($propriedade, $valor){
        if($propriedade = "nascimento"){
            # Verifica se o valor é dividido em 3 partes separadas por '/'
            if(count(explode('/', $valor)) == 3){
                echo "Dado '$valor', atribuido à '$propriedade' <br> ";
                $this->$propriedade = $valor;
            }else{
                echo "Dado '$valor', não atribuido à '$propriedade' <br>";
            }
        }
    }
}

?>