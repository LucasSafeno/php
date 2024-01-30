<?php 
class Aplicacao{
    static $quantidade;

    /** 
     * Metodo constructor
     * incremente $quantidade de aplicações
     */
    function __construct($nome){
        // incremente propriedade estatica
        self::$quantidade++;

        $i = self::$quantidade;

        echo "Nova aplicação nr. $i: $nome <br>";
    }
}

# Cria novos objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo "A quantidade de aplicações  = ".Aplicacao::$quantidade. "<br>";

?>