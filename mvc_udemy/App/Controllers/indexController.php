<?php 
namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action{

    public function index(){
       // $this->view->dados = array("Sofá", "Cadeira","Cama");


        // instancia de conexão
        $conn = Connection::getDb();
        // instancia modelo
        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    } // index

    public function sobreNos(){
        //$this->view->dados = array("Notebook", "Computador Desktop");
        $this->render('sobre_nos', 'layout2');
    } // sobreNos



}// IndexController

?>