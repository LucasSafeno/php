<?php 
class Anuncios{
    public function getMeusAnuncios(){
        global $pdo;

        $array = array();
        $sql = $pdo->prepare("SELECT *,(SELECT anuncio_imagens.url FROM anuncio_imagens WHERE anuncio_imagens.id_anuncio = anuncios.id LIMIT 1) as url FROM anuncios WHERE id_usuario = :id");
        $sql->bindValue(":id",$_SESSION['cLogin']);
        $sql->execute();

        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;

    } // getMeusAnuncios

    public function addAnuncio($titulo, $categoria, $valor, $descricao, $estado){

        global $pdo;

        $sql = $pdo->prepare("INSERT INTO anuncios SET titulo = :titulo, id_usuario = :id_usuario, id_categoria = :id_categoria, descricao = :descricao, valor = :valor, estado = :estado");
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":id_categoria", $categoria);
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":estado", $estado);
        $sql->execute();

    } // addAnuncio

    public function excluir($id){
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM anuncio_imagens WHERE id_anuncio = :id_anuncio");
        $sql->bindValue(":id_anuncio", $id);
        $sql->execute();

        $sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

    } // excluir

    public function getAnuncio($id){
        $array = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM anuncios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    } // getAnuncio

    public function editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $id){
        global $pdo;

        $sql = $pdo->prepare("UPDATE anuncios SET titulo = :titulo, id_usuario = :id_usuario, id_categoria = :id_categoria, descricao = :descricao, valor = :valor, estado = :estado WHERE id = :id");
        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":id_categoria", $categoria);
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }


} // anuncios
?>