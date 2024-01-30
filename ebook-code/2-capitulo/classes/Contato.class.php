<?php 
class Contato{
    var $nome;
    var $telefone;
    var $email;


    # grava informações de contato
    function setContato($nome, $telefone, $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    # Obtém informações do contato

    function getContato(){
        return "Nome : {$this->nome}, Telefone {$this->telefone}, Email : {$this->email}";
    }
}
?>