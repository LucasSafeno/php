<?php 
require 'Template.php';

$array = array(
    "titulo" => "Titulo da página",
    "nome" => "Lucas Tenorio",
    "idade" => 28,
);

$tpl = new Template('template.phtml');
$tpl->render($array);


?>