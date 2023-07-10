<?php 
class Controller{
    public function loadView($viewName,$viewData = array()){
        extract($viewData); // pega os indices dos array e transforma em variaveis
        require 'views/'.$viewName.'.php';
    } //loadView
    
    public function loadTemplate($viewName,$viewData = array()){
        require 'views/template.php';
    } // loadTemplate

    public function loadViewInTemplate($viewName,$viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}// controller


?>