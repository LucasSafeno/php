<?php 

	class Comentarios{
		public static function selecionarComentarios($idPost){
			$conn = Connection::getConn();

			$sql = "SELECT * FROM comentario WHERE id_postagem = :id";
			$sql = $conn->prepare($sql);
			$sql->bindValue(':id', $idPost, PDO::PARAM_INT);
			$sql->execute();

			$resultado = array();
			while($row = $sql->fetchObject('Comentarios')){
				$resultado[] = $row;
			}

			return $resultado;

		} //selecionarComentarios

	}// Comentarios


 ?>