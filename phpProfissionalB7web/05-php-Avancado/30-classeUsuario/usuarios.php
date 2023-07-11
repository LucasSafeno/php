<?php 
class Usuario{

    private $id;
    private $email;
    private $nome;
    private $senha;

    private $pdo;

    public function __construct($i = null){

        try{
            $this->pdo = new PDO("mysql:dbname=usuarios;host=localhost", "root", "root");
        }catch(PDOException $e){
            echo "ERRO :".$e->getMessage();
        }



        if(!empty($i)){

            $sql = "SELECT * FROM usuarios WHERE id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($i));

            if($sql->rowCount() > 0){
                $data = $sql->fetch();

                $this->id = $data['id'];
                $this->email = $data['email'];
                $this->nome = $data['nome'];
                $this->senha = $data['senha'];
            }
        }

    } // construct

    public function getId(){
        return $this->id;
    } // getId


    public function setEmail($e){
        $this->email = $e;
    } // setemail

    public function getEmail(){
        return $this->email;
    } // getemail


    public function setNome($n){
        $this->nome = $n;
    } // setemail

    public function getNome(){
        return $this->nome;
    } // getemail


    public function setSenha($s){
        $this->senha = md5($s);
    } // setsenha

    public function salvar(){
        if(!empty($this->id)){
            $sql = "UPDATE usuarios SET email = ?, senha = ?, nome = ? WHERE id = ?"; 
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->email,
                                        $this->senha,
                                        $this->nome,
                                        $this->id));
        }else{
            $sql = "INSERT INTO usuarios SET email = ?, senha = ?, nome = ?"; 
            $sql = $this->pdo->prepare($sql);
            $sql->execute(array($this->email,
                                        $this->senha,
                                        $this->nome));

        }
    }


    public function delete(){
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $sql = $this->pdo->prepare($sql);
        $sql->execute(array($this->id));
    }

} // Usuario

?>