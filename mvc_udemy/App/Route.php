<?php 
namespace App;

class Route{

    private $routes;


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

    // Rotas que a app possui
    public function initRoutes(){
        $routes['home'] = array(
            'route'         => '/',
            'controller'    => 'indexController',
            'action'        => 'index'
        );
        $routes['sobre_nos'] = array(
            'route'         => '/sobre_nos',
            'controller'    => 'indexController',
            'action'        => 'sobreNos'
        );

        $this->setRoutes($routes);

    } // initRoutes()


    public function run($url){
        
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
    public function getUrl(){
            //parse_url retorna URL em um array dividindo seus parametros passados na URl
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    } //getUrl

} // Route

?>