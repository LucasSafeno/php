<?php 
final class ContaCorrente extends Conta{  
    var $limite;
    var $taxaTransferencia = 2.5;

    /**
     * constuct sobreescrito
     * inicializa agora $limite
     */

     function __construct($agencia, $codigo, $dataCriacao, $tiular, $senha, $saldo, $limite){
        // chama metodo construct classe pai
        parent::__construct($agencia, $codigo, $dataCriacao, $tiular, $senha, $saldo);
     }

     /**
      * Retirar
      * verifica se a $quantia retirar está dentro do $limite
      */
      function retirar($quantia){
        // imposto sobre movimentação financeiro
        $cpmf = 0.05;

        if(($this->saldo + $this->limite ) >= $quantia){
            //execute metodo classe pai
            parent::retirar($quantia);

            // debita imposto
            parent::retirar($quantia * $cpmf);
        }else{
            echo "retirada não permitida";
        }

        // retirada permitida
        return true;
      }

      /**
       * final function transferir
       */

       final function transferir($conta, $valor){
            if($this->retirar($valor)){
                $conta->depositar($valor);
            }

            if($this->titular != $conta->titular){
                $this->retirar($this->taxaTransferencia);
            }
       }

} //ContaCorrente

?>