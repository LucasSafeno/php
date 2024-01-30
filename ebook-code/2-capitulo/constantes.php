<?php 

class Biblioteca{
    const nome = 'GTK';
}

class Aplicacao extends Biblioteca{
    // declaração de constantes
    const ambiente = 'Gnome Desktop';
    const versao = '3.8';

    /**
     * Metodo constructor
     * acessa as constantes internamente
     */
    function __cnstruct($nome){
        echo parent::nome . self::ambiente . self::versao . $nome. "<br>";
    }
}

// Acessa as constantes externamente

echo Biblioteca::nome . Aplicacao::ambiente . Aplicacao::versao . "<br>";

new Aplicacao('Dia');
new Aplicacao('Gimp');

?>