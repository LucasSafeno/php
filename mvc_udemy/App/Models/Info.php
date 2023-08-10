<?php 
namespace App\Models;

use MF\Model\Model;
class Info extends Model{

    public function getinfo(){
        $query = "SELECT titulo,descricao FROM mvc.tb_info";
        return $this->db->query($query)->fetchAll();
    } // getProdutos

}// Produto
?>