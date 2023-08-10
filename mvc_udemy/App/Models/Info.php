<?php 
namespace App\Models;
class Info{

    protected $db;

    public  function __construct(\PDO $db){
        $this->db = $db;
    } // construct

    public function getinfo(){
        $query = "SELECT titulo,descricao FROM mvc.tb_info";
        return $this->db->query($query)->fetchAll();
    } // getProdutos

}// Produto
?>