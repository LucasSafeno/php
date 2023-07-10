<?php 
class homeController extends Controller{

    public function index(){

        // enviar dados
        $dados = array(
            'quantidade' => 5,
            'nome' => 'Lucas',
            'idade' => 28
        );


        // Enviar informações para o view e exibe view
        $this->loadTemplate('home',$dados);
    } // index

}// homeController

?>