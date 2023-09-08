<?php 

class Produto{
    var $codigo;
    var $descricao;
    private  $preco;
    const MARGEM = 10;
    var $quantidade;
    var $fornecedor;


    # Metodos consrtruct
    function __construct($codigo, $descricao, $quantidade, $preco){
        $this->codigo       =   $codigo;
        $this->descricao    =   $descricao;
        $this->quantidade   =   $quantidade;
        $this->preco        =   $preco;
    }

    #intercepta a obtenção da propriedade
    function __get($propriedade){
        echo "Obtendo valor da propriedade $propriedade";
        if($propriedade == 'preco'){
            return $this->$propriedade * (1 + (self::MARGEM / 100));
        }
    }

    # Intercepta a chamada de metods
    function __call($metodo, $parametros){
        echo "Você executou o método {$metodo} <br>";
        foreach($parametros as $key => $parametro){
            echo "Parametro $key: $parametro <br>";
        }
    }

    function imprimeEtiqueta(){
        print 'Código : '.$this->codigo."<br>"  ;
        print 'Descrição :'.$this->descricao."<br>";
    }
}

?>