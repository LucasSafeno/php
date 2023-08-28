<?php
session_start();
require "vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VendorConnect - Consulta Interna de  informações de Fornecedores  - By LucasSafeno</title>
    <!-- Font Awesome !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS !-->
    <link rel="stylesheet" href="assets/css/style.css">
 
</head>
<body>

<header>
    <div id="logo-header">
        <h1>VendorConnect</h1>
    </div> <!-- Logo !-->

    <nav id="menu-header">
        <ul>
            <li>
                <a href="/">Inicio</a>
            </li>

            <li onmouseenter="showMenu()" onmouseleave="hideMenu()" >
                <a href="#" class="menu-drop">Links</a>
               
                <div class="menu-dropdown">
                <ul class="ul-drop">
                    <li>
                        <a href="https://rastreamento.correios.com.br/app/index.php" target="_blank">Rastreio Correios</a>
                    </li>

                    <li>
                        <a href="https://www.braspress.com/acesso-rapido/pedido-de-coleta/" target="_blank">Coleta Braspress</a>
                    </li>
                </ul> <!-- Dropdown !-->
                </div>
            </li>

            <li>
                <a href="#">Ajuda</a>
            </li>
        </ul>
    </nav> <!-- nav !-->


    <div id="entrar-header">
        <button type="submit">
            <a href="login.php">Entrar</a>
        </button>
    </div>


</header>