<?php 
class Usuarios{

    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=modal;host=localhost", "root", "");
    } // construct

    public function adicionar($nome, $email){

        $sql = "INSERT INTO usuarios SET nome = :nome, email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->execute();

       

    } // adicionar


    public function getContatos(){
        $array = array();
        $sql = $this->pdo->query("SELECT * FROM usuarios");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    } // getContatos

    public function excluir($id){
        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
    } // excluir

    public function getUser($id){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();

        $array = array();
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }


} // Usuarios

?>