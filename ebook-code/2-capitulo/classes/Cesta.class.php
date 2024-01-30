<?php 
class Cesta{
    private $itens;

    #Adiciona itens na cesta
    function adicionaItem(Produto $item){
        $this->itens[] = $item;
    }

    #exibe a lista de produtos
    function exibeLista(){
        foreach($this->itens as $item){
            $item->imprimeEtiqueta();
        }
    }

    #Calcula valor total da cesta
    function calculaTotal(){
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->preco;
        }

        return 'R$ '.$total;
    }

}

?>