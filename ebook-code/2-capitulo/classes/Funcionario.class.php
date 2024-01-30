<?php 
class Funcionario{
    private $codigo;
    public $nome;
    private $nascimento;
    protected $salario;

    /**
     * metodo setSalario()
     * atribuir ao parametro $salario  a propriedade $salario
     */

     function setSalario($salario){
        // verifica se o número é positivo
        if(is_numeric($salario) AND ($salario > 0)){
            $this->salario = $salario;
        }
     } 

     /**
      *    metodo getSalario()
      *     retorna o valor da propriedade salario
      */

      function getSalario(){
        return $this->salario;
      }

}

?>