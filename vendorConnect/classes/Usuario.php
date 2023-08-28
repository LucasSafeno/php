<?php 
namespace App;

use App\Connection;

class Usuario{

    private $id;
    private $nome;
    private $email;
    private $senha;

    private $db;

    public function __set($attr, $value){
        $this->$attr = $value;
    } // __set

    public function __get($attr){
        return $this->$attr;
    } // __get

    public function verificaLogin(){
        $c = new Connection;
        $this->db = $c->getConn();

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":email",$this->__get('email'));
        $sql->bindValue(":senha", $this->__get('senha'));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            return $dados;
        }else{
            return false;
        }

    }

    public function teste(){
        echo "Funcinou";
    }

}// Usuario
?>