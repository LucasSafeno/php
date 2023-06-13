<?php 
class Contato{
    
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:dbname=crud_oo;host=localhost", "root", "");
    } // construct

    public function adicionar($email, $nome = ''){
        // Verificar se o email existe
        if($this->existeEmail($email) == false){
            $sql = "INSERT INTO contatos (nome, email) VALUES (:nome, :email)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();

            return true;

        }else{
            return false;
        }

    } // create

    public function getNome($email){
        $sql = "SELECT nome FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch();

            return $info['nome'];
        }else{
            return '';
        }
    } //getNome

    public function getAll(){
        $sql = "SELECT * FROM contatos";
        $sql = $this->pdo->query($sql);
        if($sql->rowCount() > 0){
            return $sql->fetchAll();
        }else{
            return array();
        }
    } // getAll


   public function editar($nome, $email){
        if($this->existeEmail($email)){
            $sql = "UPDATE contatos SET nome = :nome WHERE email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->execute();

            return true;
        }else{
            return false;
        }
    } // editar

    public function excluir($id){
        $sql = "DELETE FROM contatos WHERe id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        } // excluir

    private function existeEmail($email){
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    } // existeEmail

 



}// Contato

?>