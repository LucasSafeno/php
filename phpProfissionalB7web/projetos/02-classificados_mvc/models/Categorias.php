<?php 
class Categorias extends Model{

    public function getLista(){
        $array = array();

        $sql = $this->db->query("SELECT * FROM classificados.categorias");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    } //get Lista

} // Categorias
?>