<?php 
/**
 * classe TSQLInstruction
 * Esta classe provê os metodos em comum entre todas as instruções
 * SQL (SELECT, INSERT, DELETE E UPDATE)
 */

 abstract class TSQLInstruction{

    protected $sql; // armazena instrução SQL
    protected $criteria; // armazena objeto criterio
    private $entity;

    /**
     * metodo setEntity()
     * define o nome da entidade (tabela) manipulada pela instrução SQL
     * @param $entity = tabela
     */
    final public function setEntity($entity){
        $this->entity = $entity;
    } // setEntity


    /**
     * metodo getEntity()
     * retorna o nome da entidade (tabela)
     */
    final public function getEntity(){
        return $this->entity;
    } //getEntity


    /**
     * metodo setCriteria()
     * define um criterio de seleção dos dados através  da composição de um objeto
     * do tipo TCriteria, que oferece interface para definição de critérios
     * @param $criteria = objeto tipo criteria
     */

     public function setCriteria(TCriteria $criteria){
        $this->criteria = $criteria;
     } //setCriteria


     /**
      * metodo getInstruction()
      * declarando como <abstract> obrigamos suas declarações nas classes filhas
      * uma vez seu comportamento será distinto em cada um delas, configurando poliformismo
      */

      abstract function getInstruction();

 } //TSQLInstruction

?>