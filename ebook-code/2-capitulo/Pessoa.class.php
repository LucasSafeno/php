<?php 
class Pessoa{
    var $codigo;
    var $nome;
    var $altura;
    var $idade;
    var $nascimento;
    var $escolaridade;
    var $salario;

    /*
        Método crescer
        aumenta a altura em $centimetros
    */
    function crescer($centimetros){
        if($centimetros > 0){
            $this->altura += $centimetros;
        }
    }// crescer

    /**
     * método formar
     * altera a escolaridade para $titulacao
     */
    function formar($titulacao){
        $this->escolaridade = $titulacao;
    }

    /**
     * metodo envelhecer
     * aumenta a idade em $anos
     */
    function envelhecer($anos){
        if($anos > 0){
            $this->idade += $anos;
        }
    }

    /**
     * Contruct 
     * comportamento inicial ao objeto ser instanciado
     */

     function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario){
        $this->codigo   =   $codigo;
        $this->nome     =   $nome;
        $this->altura   =   $altura;
        $this->idade    =   $idade;
        $this->nascimento   =   $nascimento;
        $this->escolaridade =   $escolaridade;
        $this->salario      =   $salario;
     }

     /**
      * destruct
      * comportamento da classe ao ser destruida
      */

      function __destruct(){
        echo "Objeto {$this->nome} foi finalizado...<br>";
      }

} // Pessoa

?>