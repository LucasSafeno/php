<?php 
class produtoController extends Controller{
    public function index(){

    } // index

    public function abrir($id){
        $dados = array();
        
        $a = new Anuncios();
        $u = new Usuarios();

       if(empty($id)){
        header("Location:".BASE_URL);
        exit;
       }
    
        $info = $a->getAnuncio($id);

        $dados['info']  = $info;

        $this->loadTemplate('produto', $dados);
    }

} // produtoController
?>