<?php 
namespace MF\Controller;
use \stdClass;

abstract class Action{

    protected $view;

    public function __construct(){
        $this->view = new \stdClass();
    } // construct

    
    protected function render($view, $layout){
        $this->view->page = $view;
        if(file_exists("../App/Views/".$layout.".phtml")){
            require_once "../App/Views/".$layout.".phtml";
        }else{
            $this->content();
        }
        
    } // render

    protected function content(){
        $classeAtual = get_class($this);

        $classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);
        $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));

        require_once "../App/Views/".$classeAtual."/". $this->view->page.".phtml";
    } // content

}// Action

?>