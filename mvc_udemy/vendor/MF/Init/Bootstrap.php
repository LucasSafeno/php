<?php 
namespace MF\Init;

abstract class Bootstrap{
    
    private $routes;

    abstract protected function initRoutes();

    public function __construct(){
        $this->initRoutes();
        $this->run($this->getUrl());
    }// construct

    public function getRoutes(){
        return $this->routes;
     } // getRoutes
 
     public function setRoutes(array $routes){
         $this->routes = $routes;
     } // setRoutes

     protected function run($url){
        
        foreach($this->getRoutes() as $key => $route){

            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);

                $controller = new $class;

                $action = $route['action'];
                $controller->$action();
            }
        }
    } // run

    //Verifica qual rota usuário está acessando
    protected function getUrl(){
        //parse_url retorna URL em um array dividindo seus parametros passados na URl
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
} //getUrl

}// Bootstrap
?>