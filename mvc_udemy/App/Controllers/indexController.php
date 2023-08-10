<?php 
namespace App\Controllers;

use MF\Controller\Action;
use MF\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action{

    public function index(){
       // $this->view->dados = array("Sofá", "Cadeira","Cama");

      $produto =  Container::getModel('Produto');

        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    } // index

    public function sobreNos(){


        $info = Container::getModel('Info');

        $informacoes = $info->getInfo();

        $this->view->dados = $informacoes;

        //$this->view->dados = array("Notebook", "Computador Desktop");
        $this->render('sobre_nos', 'layout2');
    } // sobreNos



}// IndexController

?>