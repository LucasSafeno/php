<?php 
namespace App\Controllers;

use MF\Controller\Action;

class IndexController extends Action{

    public function index(){
        $this->view->dados = array("Sofá", "Cadeira","Cama");
        $this->render('index');
    } // index

    public function sobreNos(){
        $this->view->dados = array("Notebook", "Computador Desktop");
        $this->render('sobre_nos');
    } // sobreNos



}// IndexController

?>