<?php 
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;


class AppController extends Action{

    public function timeline(){
        
        $this->validaAutenticao();
        
            // recuperar tweet
            $tweet = Container::getModel('Tweet');
            $tweet->__set('id_usuario', $_SESSION['id']);
            $tweets = $tweet->getAll();

            $this->view->tweets = $tweets;

            $usuario = Container::getModel('Usuario');

            $usuario->__set('id', $_SESSION['id']);

            $this->view->info_usuario = $usuario->getInfoUsuario();
            $this->view->total_tweets = $usuario->getTotalTweets();
            $this->view->total_seguindo = $usuario->getTotalSeguindo();
            $this->view->total_seguidores = $usuario->getTotalSeguidores();


           $this->render('timeline');
       
      
    } // timeline


    public function tweet(){

    
    $this->validaAutenticao();
           
            $tweet = Container::getModel('Tweet');
            
            $tweet->__set('tweet', $_POST['tweet']);
            $tweet->__set('id_usuario', $_SESSION['id']);

            $tweet->salvar();
            header("Location: /timeline");


    } //tweet

    public function validaAutenticao(){
        session_start();
        if(!isset($_SESSION['id']) || empty($_SESSION['nome'])){
            header("Location: /?login=erro");
            
        }
    } //validaAutenticao

    public function quemSeguir(){
        
        $this->validaAutenticao();

        $pesquisarPor = isset($_GET['pesquisarPor']) ? $_GET['pesquisarPor'] : '';

        $usuarios = array();

        if($pesquisarPor != ''){
            $usuario = Container::getModel('Usuario');
            $usuario->__set('nome', $pesquisarPor);
            $usuario->__set('id', $_SESSION['id']);
            $usuarios = $usuario->getAll();
        }

        $this->view->usuarios = $usuarios;
        $this->render('quemSeguir');

    } // quemSeguir

    public function acao(){
        $this->validaAutenticao();

        $acao = isset($_GET['acao']) ? $_GET['acao'] :  '';
        $id_usuario_seguindo = isset($_GET['id_usuario']) ? $_GET['id_usuario'] :  '';

        $usuario = Container::getModel('Usuario');
        $usuario->__set('id', $_SESSION['id']);

        if($acao == 'seguir'){
            $usuario->seguirUsuario($id_usuario_seguindo);
        }else if($acao = 'deixar_de_seguir'){
            $usuario->deixarDeSeguir($id_usuario_seguindo);
        }

        header("Location: /quem_seguir");
    } // acap

    public function remover(){
        $this->validaAutenticao();

        $id = $_GET['tweet'] ? $_GET['tweet'] : '';
        $tweet = Container::getModel('Tweet');

        $tweet->__set('id', $id);
        $tweet->remover();
 
        header("Location: /timeline");
    }

}// AppController
?>