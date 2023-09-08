<?php 
include_once 'classes/Fornecedor.class.php';
include_once 'classes/contato.class.php';


# Instancia novo fornecedor
$fornecedor = new Fornecedor();
$fornecedor->razaoSocial = 'Produtos Bom Gosto SA';

#Atrubi inforações de contato
$fornecedor->setContato('Lucas', '51-12345-567', 'lucas@lucas.com');


# imprime informações

echo $fornecedor->razaoSocial."<br>";
echo "Informações de contato <br>";
echo $fornecedor->getContato();
?>