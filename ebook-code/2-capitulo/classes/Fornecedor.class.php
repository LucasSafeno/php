<?php 
class Fornecedor{
    var $codigo;
    var $razaoSocial;
    var $endereco;
    var $cidade;
    var $contato;

    # metodo construct
    function __construct(){
        // Instancia novo contato
        $this->contato = new Contato;
    }

    # grava contato
    function setContato($nome, $telefone, $email){
        // delega chamada de metodo
        $this->contato->setContato($nome, $telefone, $email);
    }

    #retorna contato
    function getContato(){
        // Delega chamada do metodo
        return $this->contato->getContato();
    }
}
?>