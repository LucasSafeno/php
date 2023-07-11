<?php 
class Pessoa{

    private $nome;
    private $idade;

    public static function getInstance(){
        static $instance = null;
        if($instance === null){
            $instance = new Pessoa();
        }

        return $instance;
    } // getInstance

    private function __construct(){

    } // construct

    public function setNome($n){
         $this->nome = $n;
    }

    public function getNome(){
        return $this->nome;
    }


} // Pessoa

$cara = Pessoa::getInstance();
$cara->setNome('Lucas');
echo $cara->getNome();

$cara2 = Pessoa::getInstance();
echo "<br> Instancia 2".$cara2->getNome();


?>