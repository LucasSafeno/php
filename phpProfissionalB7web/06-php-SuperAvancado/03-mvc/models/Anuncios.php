<?php 
class Anuncios extends Model{

    public function getQuantidade(){
        $sql = "SELECT COUNT(*) as c FROM estrutura_mvc.anuncios";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql['c'];
        }else{
            return 0;
        }
    } // getQuantidade

} // Anuncios

?>