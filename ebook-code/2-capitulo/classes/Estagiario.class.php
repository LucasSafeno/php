<?php 
class Estagiario extends  Funcionario{
    /**
     * metodo getSalario sobresscrito
     * 
     */

     function getSalario(){
        return $this->salario * 1.12;
     }
}

?>