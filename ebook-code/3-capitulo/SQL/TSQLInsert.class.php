<?php 
/**
 * classe TSQLInsert
 *  Esta classe prove meios para manipulação de uma instrução INSERT no banco de dados
 */

 final class TSQLInsert extends TSQLInstruction{
    

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
        }

     } //setRowData

 } // TSQLInsert

?>