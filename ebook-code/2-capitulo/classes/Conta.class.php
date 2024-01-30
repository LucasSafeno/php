<?php 
abstract class Conta{
    var $agencia;
    var $codigo;
    var $dataCriacao;
    var $titular;
    var $senha;
    var $saldo;
    var $cancelada;

    /** 
     * metodo retirar
     * diminui saldo em $quantia
     */

     function retirar($quantia){
        if($quantia > 0){
            $this->saldo -= $quantia;
            }
        }


        /**
         * método deposito
         * aumenta saldo em $quantia
         */

         function depositar($quantia){
            if($quantia > 0){
                $this->saldo += $quantia;
            }
         }

         /**
          * obter saldo
          * retorno o saldo atual
          */
          function obterSaldo(){
            return $this->saldo;
          }
          /**
           * Abstract metodo
           */
          abstract function transferir($conta, $valor);

          /**
           * Construct
           *  inicializar propriedades
           */

           function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $saldo){
            $this->agencia      =   $agencia;
            $this->codigo       =   $codigo;
            $this->dataCriacao  =   $dataCriacao;
            $this->titular      =   $titular;
            $this->senha        =   $senha;
            $this->saldo        =   $saldo;
           }

           /**
            *  destruct
            * finalização do objeto
            */
            function __destruct(){
                echo "Objeto conta {$this->codigo} de {$this->titular->nome} finalizada...<br>";
            }

} // conta

?>