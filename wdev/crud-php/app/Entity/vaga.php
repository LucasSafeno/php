<?php
    namespace App\Entity;

use App\Db\Database;
use \PDO;

class Vaga{

    public $id;
    public $titulo;
    public $descricao;
    public $ativo;
    public $data;

    public function cadastrar(){
        // Definir a data
        $this->data = date('Y-m-d H:i:s');
        // Inserir vaga no banco
        $obDatabase = new Database('vagas');
       $this->id =  $obDatabase->insert([
                        'titulo' => $this->titulo,
                        'descricao' => $this->descricao,
                        'ativo' => $this->ativo,
                        'data' => $this->data
        ]);

        //retornar sucesso
        return true;
        
    }// cadastrar


    public static function getVagas($where = null, $order = null, $limit = null){
        return (new Database('vagas'))->select($where,$order,$limit)
                                      ->fetchAll(PDO::FETCH_CLASS, self::class);
    }// get Vagas

    public static function getVaga($id){
        return (new Database('vagas'))->select('id = '.$id)
                                      ->fetchObject(self::class);
    }


}// Vaga

?>