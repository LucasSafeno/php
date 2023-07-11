<?php 
class Cache{

    private $cache;

    public function setVar($nome, $valor){
        $this->readCache();
        $this->cache->$nome = $valor;
        $this->saveCache();
    } //setVar

    public function getVar($nome){
        $this->readCache();

        return $this->cache->$nome;
    } //getVar

    private function readCache(){
        $this->cache = new stdClass();
        if(file_exists('cache.cache')){
            $this->cache = json_decode(file_get_contents('cache.cache'));
        }
    } //readCache

    private function saveCache(){
        file_put_contents('cache.cache', json_encode($this->cache));
    }// saveCache



} // cache


$cache = new Cache();
$cache->setVar("nome", "Lucas");
?>