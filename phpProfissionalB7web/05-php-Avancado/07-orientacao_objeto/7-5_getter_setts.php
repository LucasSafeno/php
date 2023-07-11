<?php 
class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($t){
        if( is_string($t)){
            $this->titulo = $t;
        }else{
            echo "Titulo inválido";
        }
    }

} // Post

$post = new Post();
$post->setTitulo(123);

echo $post->getTitulo();

?>