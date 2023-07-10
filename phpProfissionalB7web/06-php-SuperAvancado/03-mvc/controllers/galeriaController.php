<?php 
class galeriaController extends Controller{

    public function index(){
        $dados = array(
            'qtFotos' => 30,
            'nomeController' => 'galeria Controller',
            'nome' => 'Lucas Tenório'
        );

        $this->loadTemplate('galeria', $dados);
    }

} // galeriaController


?>