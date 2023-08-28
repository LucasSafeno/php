<?php 
namespace App;

use PDOException;

class Connection{

    private $db;

    public function __construct(){
       $this->getConn();
    }

    public function getConn(){
        try{
            $this->db = new \PDO("mysql:host=localhost;dbname=vc_db","root", "");

            return $this->db;
        }catch(PDOException $e){
            echo "ERROR".$e->getMessage();
        }
    }
  

}// connection

?>