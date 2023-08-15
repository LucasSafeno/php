<?php 
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;


class AppController extends Action{

    public function timeline(){
        session_start();
        $this->validaAutenticao();
        
            // recuperar tweet
            $tweet = Container::getModel('Tweet');
            $tweet->__set('id_usuario', $_SESSION['id']);
            $tweets = $tweet->getAll();

            $this->view->tweets = $tweets;

           $this->render('timeline');
       
      
    } // timeline


    public function tweet(){

    session_start();
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

}// AppController
?>