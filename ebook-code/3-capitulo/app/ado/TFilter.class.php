<?php 
/**
 * Class TFilter
 * esta classe provê uma interface para definição de filtros de seleção
 */

 class TFilter extends TExpression{
    private $variable; // variavel
    private $operator; // operador
    private $value; // valor


    /**
     * Metodo construct
     * instancia novo filtro
     * @param $variable = variavel
     * @param $operator = operador
     * @param $value = valor
     */

     public function __construct($variable,$operator,$value){
        // Armazena as propriedades
        $this->variable = $variable;
        $this->operator = $operator;

        // transforma o valor de acordo com certas regras
        // antes de atribuir à propriedade $this->value
        $this->value = $this->transform($value);
     } // construct

     /**
      * metodo transform
      * recebe um valor e faz modificações necessárias
      * para ele ser interpretado pelo banco de dados
      * podendo ser integer/string/boolean/ ou array
      * @param $value = valor a ser transformado
      */

      private function transform($value){
        // caso seja array
        if(is_array($value)){
            //pecorre os valores
            foreach($value as $x){
                // se for um inteiro
                if(is_integer($x)){
                    $foo[] = $x;
                }else if(is_string($x)){
                    // se for string adiciona aspas
                    $foo[] = "'$x'";
                }
            }
            // converte array em string separado por ,
            $result = '('.implode(',',$foo).')';
            
        }else if(is_string($value)){ // caso seja string
            // adiciona aspas
            $result = "'$value'";
        }else if(is_null($value)) { // caso seja nulo
            // armazena NULL
            $result = 'NULL';
        }else if(is_bool($value)){ // caso seja booleano
            // armazena true ou false
            $result = $value ? 'TRUE' : 'FALSE';
        } else{
            $result = $value;
        }

        return $result;

      } //transform

      /**
       * metodo dump
       * retorna o filtro em forma de expressão
       */
      public function dump(){
        // concatena a expressão
        return "{$this->variable} {$this->operator} {$this->value}";
      }


 }

?>