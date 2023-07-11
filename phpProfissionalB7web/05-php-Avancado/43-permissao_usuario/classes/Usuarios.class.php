<?php 
class Usuarios{

    private $id;
    private $permissoes;

    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function fazerLogin($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();

            $_SESSION['logado'] = $sql['id'];

            return true;    
        }

        return false;
    } // fazerLogin

    public function setUsuario($id){
        $this->id = $id;

        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();

            $this->permissoes = explode(',', $sql['permissoes']);
        }
    } // setUsuario

    public function getPermissoes(){
        return $this->permissoes;
    } // getPermissoes


    public function  temPermissao($p){
        if(in_array($p, $this->permissoes)){
            return true;
        }else{
            return false;
        }
    }



}// usuarios
?>