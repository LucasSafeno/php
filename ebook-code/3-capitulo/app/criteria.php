<?php 
// carrega classes
include_once "ado/TCriteria.class.php";
include_once "ado/TExpression.class.php";
include_once "ado/TFilter.class.php";

// exemplo criteria usando o OR
// a idade deve ser menor que 16 OU maior que 60
$criteria = new TCriteria();
$criteria->add(new TFilter('idade', '<', '16'), TExpression::OR_OPERATOR);
$criteria->add(new TFilter('idade', '>', '60'), TExpression::OR_OPERATOR);

echo $criteria->dump();
echo "<br>";

// criteria utilizando AND
// juntamente com operadores de conjunto IN (dentro do conjunto) e NOT IN (fora do conjunto)
// a idade deve estar dentro do conjunto (24,25,26) e deve estar forado conjunto (10)
$criteria = new TCriteria();
$criteria->add(new TFilter('idade', 'IN', array(24,25,26)));
$criteria->add(new TFilter('idade', 'NOT IN', array(10)));

echo $criteria->dump();
echo "<br>";



?>