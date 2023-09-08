<?php 
include_once 'classes/Produto.class.php';
include_once 'classes/Fornecedor.class.php';

# Instancia de fornecedor
$fornecedor = new Fornecedor();
$fornecedor->codigo         =   848;
$fornecedor->razaoSocial    =   "Bom gosto Alimentos SA"   ;
$fornecedor->endereco       =   "Rua xxxxxx";
$fornecedor->cidade         =   "Cidade";

# Instancia de Produto
$produto = new Produto();
$produto->codigo        =   462;
$produto->descricao     =   "Doce de pêssego";
$produto->preco         =   1.24;
$produto->fornecedor    =   $fornecedor;

# imprime atributos

echo "Código : ".$produto->codigo."<br>";
echo "Descrição : ".$produto->descricao."<br>";
echo "Código : ".$produto->fornecedor->codigo."<br>";
echo "Razão Social : ".$produto->fornecedor->razaoSocial."<br>";


?>