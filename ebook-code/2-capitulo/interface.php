<?php 
#interface aluno

interface IAluno{
    function getNome();
    function SetNome($nome);
    function setResponsavel(Pessoa $resposnavel);
}

class Aluno implements IAluno{
   
        #atribui nome do aluno
        function setNome($nome){
            $this->nome = $nome;
        }

        # Retorna nome do aluno;
        function getNome(){
            return $this->nome;
        }
}

# instancia aluno

$aluno = new Aluno();
$aluno->setNome('Lucas');

echo $lucas->getNome();
?>