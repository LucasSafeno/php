<?php 
// Carega classes necessarias
include_once "app/ado/TExpression.class.php";
include_once "app/ado/TFilter.class.php";

//cria um filtro por data
$filter1 = new TFilter('data', '=', '2007-06-02');
echo $filter1->dump();
echo "<br>";


// cria um filtro por salario(inter)
$filter2 = new TFilter('salario', '>', '3000');
echo $filter2->dump();
echo "<br>";

// cria um filtro por sexo (array)
$filter3 = new TFilter('sexo', 'IN', array('M','F'));
echo $filter3->dump();
echo "<br>";

// cria filter  por contrato (NULL)
$filter4 = new TFilter('contrato', 'IS NOT', 'NULL');
echo $filter4->dump();
echo "<br>";


// cria filtro por ativo (boolean)
$filter5 = new TFilter('ativo', '=','TRUE');
echo $filter5->dump();
echo "<br>";


?>