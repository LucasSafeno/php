<?php

class Aplicacao{
    /** 
     * Metodo estatico
     * lê o arquivo readme.txt
     */

     static function sobre(){
        $fd = fopen('readme.txt', 'r');
        while($linha = fgets($fd, 200)){
            echo $linha;
        }
     }
}

echo "Informações sobre aplicação <br>";
echo "================================= <br>";
Aplicacao::sobre();

?>