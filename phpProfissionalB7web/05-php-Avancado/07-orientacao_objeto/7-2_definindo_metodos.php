<?php 

class Usuario{
    
    // public -> Acessivel por fora do objeto, torna as ações públicas
    // private -> Acessivel apenas pela classe
    // protected -> Acissivel pela clase ou as classes que extendem

    public function trocarSenha($senhaAtual, $novaSenha){
        // conectar banco de dados
        // Verificar se a senha atual está correta
        // Trocar Senha
    }// trocarNome

    private function conectarAoBanco(){
        // conecta ao banco de dados
    }

    private function verificaSenha($senha){
        // verificar senha
    }

    protected function algumaCoisa(){

    }

} // Usuario

?>