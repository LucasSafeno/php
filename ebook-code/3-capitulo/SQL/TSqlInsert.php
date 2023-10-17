<?php 
/**
 * classe TSQLInsert
 *  Esta classe prove meios para manipulação de uma instrução INSERT no banco de dados
 */

 final class TSqlInsert extends TSQLInstruction{
    
    public $columnValues;

    /**
     * método setRowData();
     * atribui valores à determinadas colunas no banco de dados que são inseridas
     * @param $column = coluna da tabela
     * @param $value = valor a ser armazenado
     */

     public function setRowData($column, $value){

        // monta um array indexado pelo nome da coluna
        if(is_string($value)){
            // adiciona \ em aspas
            $value = addslashes($value)/
            //caso seja string
            $this->columnValues[$column] = $value;
        }else if(is_bool($value)){
            // caso seja um booleano
            $this->columnValues[$column] = $value ? 'TRUE' : 'FALSE';
        }else if(isset($value)){
            //caso seja outro tipo de dado
            $this->columnValues[$column] = $value;
        }else{
            // caso seja NULL
            $this->columnValues[$column] = "NULL";
        }


     } //setRowData


     public function entity(){
        TSQLInstruction::getEntity();
     }
     

        /**
         * método criteria()
         * não existe no contexto desta classe, logo, irá lançar um erro caso for executado
         */

         public function setCriteria($criteria){
            // lança erro
            throw new Exception("Cannot call setCriteria from ", __CLASS__);
         } // setCriteria


         /**
          * metodo getInstruction()
          * retorna a instrução do INSERT em forma de string
          */
         public function getInstruction()
         {
            $this->sql = "INSERT INTO {$this->entity} (";
            // monta uma string contendo nomes de colunas
            $columns = implode(',', array_keys($this->columnValues));
            // monta uma string contendo valores
            $values = implode(',', array_values($this->columnValues));
            $this->sql .= $columns .')';
            $this->sql .= " values ({$values})";


            return $this->sql;
         }

 } // TSQLInsert

?>