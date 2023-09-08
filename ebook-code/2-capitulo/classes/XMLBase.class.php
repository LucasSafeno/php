<?php 
class XMLBase{
    function toXml(){
        $retorno = '<'. get_class($this) .'>'."<br>";
        $propriedades = get_object_vars($this);
        foreach($propriedades as $propriedade => $valor){
            $retorno = "<$propriedade> $valor </$propriedade> <br>";
        }

        $retorno .= '</'. get_class($this) . '>'."<br>";
        return $retorno;
    }
}
?>