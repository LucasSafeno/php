<?php
namespace App\Db;

use \PDO;

class Database{

    const HOST = 'localhost';
    const NAME = 'wdev_vagas';
    const USER = 'safeno';
    const PASS = 'root';

    private $table;
    private $connection;

    public function __construct($table = null){
        $this->table = $table;
        $this->setConnection();
    } // construct

    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOExepcetion $e){
            die('ERROR'.$e->getMessage());
        }
    } //setConnection

    public function execute($query, $params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;

        }catch(PDOExepcetion $e){
            die('ERROR'.$e->getMessage());
        }

    }//execute

    public function insert($values){
        // Dados da query
        $fields = array_keys($values); // Pega as chaves do array
       // função que cria arrays passando por parametro array, tamanho do array e caso não haja posições preencher com o terceiro parametro
       $binds = array_pad([],count($fields), '?'); 

        //Montar a query
        $query = 'INSERT INTO '.$this->table.' ('.implode(',', $fields).') VALUES('.implode(',', $binds).')';

        //Executa insert
        $this->execute($query,array_values($values));

        // Retorna ID inserido
        return $this->connection->lastInsertId();
        
    }// insert

    public function select($where = null, $order = null, $limit = null){
        // dados da query
        $where = !empty($where) ? 'WHERE '.$where : '';
        $order = !empty($order) ? 'ORDER BY '.$order : '';
        $limit = !empty($limit) ? 'LIMIT '.$ordlimiter : '';
        $query = 'SELECT * FROM '.$this->table.' '.$where.' '.$order.' '.$limit;


        return $this->execute($query);
    }
 
}// Database

?>