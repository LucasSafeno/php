<?php 
class homeController extends Controller{

    public function index(){

        // Models
        $anuncios = new Anuncios();
        $usuario = new Usuarios();

        // enviar dados
        $dados = array(
            'quantidade' => $anuncios->getQuantidade(),
            'nome' => $usuario->getNome(),
            'idade' => $usuario->getIdade()
        );



        // Enviar informações para o view e exibe view
        $this->loadTemplate('home',$dados);
    } // index

}// homeController

?>