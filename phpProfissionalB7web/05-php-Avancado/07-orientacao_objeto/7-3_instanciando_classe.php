<?php 
class Cachorro{

    public static function latir(){
        echo "Au au";
    }
} // Cachorro

// Instanciando objeto
$cachorro = new Cachorro();
$cachorro->latir();
echo "<hr>";
$cachorro2 = new Cachorro();
$cachorro2->latir();
echo "<hr>";
// Usr metodo sem instancia ** apenas funções públicas
Cachorro::latir();
?>