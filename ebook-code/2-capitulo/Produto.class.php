<?php 

class Produto{
    var $codigo;
    var $descricao;
    var $preco;
    var $quantidade;


    function imprimeEtiqueta(){
        print 'Código : '.$this->codigo."<br>"  ;
        print 'Descrição :'.$this->descricao."<br>";
    }
}

?>