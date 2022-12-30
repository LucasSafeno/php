<?php 

class Postagem{
	public static function selecionaTodos(){
		$con = Connection::getConn();

		$sql = "SELECT * FROM postagem ORDER BY id DESC";
		$sql = $con->prepare($sql);
		$sql->execute();

		$resultado = array();

		while($row = $sql->fetchObject('Postagem')){
			$resultado[] = $row;
		}

		if(!$resultado){
			throw new Exception("Não foi encontrado nenhum registro!");
		}

		return $resultado;

	}// Seleciona todos


	public static function selecionaPorId($idPost){
		$con = Connection::getConn();

		$sql = "SELECT * FROM postagem WHERE id = :id";
		$sql = $con->prepare($sql);
		$sql->bindValue(':id', $idPost, PDO::PARAM_INT);
		$sql->execute();

		$resultado = $sql->fetchObject('Postagem');

		if(!$resultado){
			throw new Exception("Não foi encontrado nenhum registro!");
		}else{
			$resultado->comentarios = Comentarios::selecionarComentarios($resultado->id);

			
		}
		return $resultado;

	}//selecionaPorId



	public static function insert($dadosPost){


		if(empty($dadosPost['titulo']) OR empty($dadosPost['conteudo'])){
			throw new Exception("Preencha todos os campos!");

			return false;
		}

		$conn = Connection::getConn();

		$sql = 'INSERT INTO postagem (titulo, conteudo) VALUES (:titulo, :conteudo)';
		$sql = $conn->prepare($sql);
		$sql->bindValue(':titulo', $dadosPost['titulo']);
		$sql->bindValue(':conteudo', $dadosPost['conteudo']);
		$res = $sql->execute();

		if($res == 0){
			throw new Exception("Falha ao inserir publicação");

			return false;
		}

		return true;

	}// insert


	public static function update($params){

		$conn = Connection::getConn();

		$sql = "UPDATE postagem SET titulo = :titulo, conteudo = :conteudo WHERE id = :id";
		$sql = $conn->prepare($sql);
		$sql->bindvalue(':titulo', $params['titulo']);
		$sql->bindValue(':conteudo', $params['conteudo']);
		$sql->bindValue(':id', $params['id']);

		$resultado = $sql->execute();

		if($resultado == 0 ){
			throw new Exception("Erro ao alterar publicação");
		}

		return true;
	}


}// Postagem

 ?>