<?php 
class Post{
    private $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function __construct($t, $c){
       $this->setTitulo($t);
        $this->setCorpo($c);
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo($t){
        if(is_string($t)){
            $this->titulo = $t;
        }
    }

    public function setCorpo($c){
        $this->corpo = $c;
    }

    public function getCorpo(){
        return $this->corpo;
    }

} // Post

$post = new Post("Qualquer coisa", "Corpo da Postagem");
$post->setTitulo(123);

echo $post->getTitulo()."<br>".$post->getCorpo();

?>