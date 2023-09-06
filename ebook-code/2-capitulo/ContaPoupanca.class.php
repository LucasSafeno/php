<?php 
class ContaPoupanca extends Conta{
    var $aniversario;

    /**
     * Metodo construtor (sobrescrito)
     * agora, também inicializa a variavel $aniversario
     */

     function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo,$aniversario){
            // chamada do metodo  construtor da calsse pai
            parent::__construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo);
            $this->aniversario = $aniversario;
     }

     /**
      * Metodo retirar (sobrescrito)
      * verifica se há saldo para retirar tal $quantia
      */
      function retirar($quantia){
        if($this->saldo >= $quantia){
            // execute metodo da classe pai
            parent::Retirar($quantia);
        }else{
            echo "Retirada não permetida";
            return false;
        }

        // retirada permitida
        return true;
      }

} // ContaPoupanca
?>