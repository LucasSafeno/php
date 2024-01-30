<?php 
class Funcionario{

    var $codigo;
    var $nome;
    var $salario = 586;
    var $departamento = 'Contabilidade';

    function setSalario(){}
    function getSalario(){}
    function setNome(){}
    function getNome(){}
} // funcionario

class Estagiario extends Funcionario{
    var $salario;
    var $bolsa;
}

echo "<pre>";
print_r(get_class_methods('Funcionario')); // retorna métodos da classe
echo "</pre>";


echo "<pre>";
print_r(get_class_vars('Funcionario')); // retorna propriedades da classe
echo "</pre>";

$jose = new Funcionario();
$jose->codigo = 44;
$jose->nome = 'José';
$jose->salario += 100;
$jose->departamento = 'Financeiro';

$lucas = new Estagiario();

echo "<pre>";
print_r(get_object_vars($jose)); // retorna vetor com conteudo e propriedades de um OBJETO
echo "</pre>";

echo "<br>";
echo "<hr>";
echo get_class($jose); // retorna a classe que o objeto pertence
echo "<br>";
echo get_parent_class($lucas); // retorna classe pai
echo "<br>";
echo get_parent_class('Estagiario');

echo "<hr>";

if(is_subclass_of($lucas, 'Funcionario')){
    echo "Classe do objeto <b>Lucas</b> é deverivado de  <b>Funcionario</b>";
}
echo "<br>";

if(is_subclass_of('Estagiario', 'Funcionario')){
    echo "Classe <b>estagiario</b> é derivada de <b>Funcionario</b>";
}
echo "<hr>";
echo "<br>";

// method_exists ->  Retorna se um metodo existe, pode usar antes de executar metodo
if(method_exists($jose, 'setNome')){
    echo "O objeto <b>José</b> possui o método <b>setNome</b>";
}
echo "<br>";
if(method_exists($jose, 'getNome')){
    echo "O objeto <b>José</b> possui o método <b>getNome</b>";
}
?>