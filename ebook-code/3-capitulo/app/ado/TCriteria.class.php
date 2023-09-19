<?php 
/**
 * classe TCriteria
 * Esta classe provê  uma interface utilizada para definição de critérios
 */

require_once 'TExpression.class.php';

 class TCriteria extends TExpression{

    private $expressions; // armazena expressões
    private $operators; // armazena operadores
    private $properties; // propriedades do criterio

    /**
     * método add()
     * adiciona uma expressão ao criterio
     * 
     * @param $expression  = expressão (objeto TExpression)
     * @param $operator = operador lógico de comparação
     */

     public function add(TExpression $expression, $operator = self::AND_OPERATOR){
        // na primeira vez, precisamos do operador lógico para concatenar
        if(empty($this->expressions)){
            unset($operator);
        }

        // agrega o resultado da expressão à lista de operações
        $this->expressions[] = $expression;
        $this->operators[] = $operator;
    } //add



    /**
     * metodo dump()
     * 
     * returna a expressão final
     */

     public function dump(){
        $result = '';
        // concatena a lista de expressões
        if(is_array($this->expressions)){
            foreach($this->expressions as $i => $expression){
                $operator = $this->operators[$i];
                // concatena o operador com a respectiva expressão
                $result .= $operator.$expression->dump(). ' ';
            }

            $result = trim($result);
            return "({$result})";
        }
     } // dump()



     /**
     * metodo setProperty()
     * define valor de uma propriedade
     * @param $property = propriedade
     * @param $value = valor
     */

     public function setProperty($property, $value){
        $this->$property = $value;
     } // setProperty

     /**
      * metodo getProperty()
      * retorna o valor de uma propriedade
      * @param $property = propriedade
      */

      public function getProperty($property){
        return $this->properties[$property];
      } //getProperty()

 } //TCriteria


    

?>