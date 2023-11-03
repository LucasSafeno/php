<?php 
namespace App\Http;

use \Closure;
use Exception;

class Router{

    /**
     * url completa (raiz)
     *
     * @var string
     */
    private $url;

    /**
     * Prefixo de todas as rotas
     *
     * @var string
     */
    private $prefix = '';

    /**
     * indices de rotas
     *
     * @var array
     */
    private $routes;

    /**
     * Instancia de request
     *
     * @var Request
     */
    private $request;

    /**
     * Metodo responsavel por iniciar a classe
     *
     * @param string $url
     */
    public function __construct($url){
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * metodo responsavel por definir o prefixo das rotas
     *
     * @return void
     */
    public function setPrefix(){
        // informações da url atual
        $parseUrl = parse_url($this->url);
        
        //Define o prefixo
        $this->prefix = $parseUrl['path'] ?? '';
    } //setPrefix

    /**
     * metodo responsavel por adicionar uma rota na classe
     *
     * @param string $method
     * @param string $route
     * @param array $params
     * @return void
     */
    private function addRoute($method, $route, $params = []){
       // Validação dos parametros
       foreach($params as $key=>$value){
        if($value instanceof Closure){
            $params['Controller'] = $value;
            unset($params[$key]);
            continue;
        }
       }

       // Padrão de validação da URL
       $patternRoute = '/^'.str_replace('/','\/',$route).'$/';

       // Adiciona rota dentro da classe
       $this->routes[$patternRoute][$method] = $params;


    }// addRoute

    /**
     * metodo responsavel por definir uma rota de get
     *
     * @param string $route
     * @param array $params
     * @return void
     */
    public function get($route, $params = []){
        return $this->addRoute('GET', $route, $params);
    } // get

    /**
     * Metodo responsavel por retornar a URi desconsiderando prefix
     *
     * @return string
     */
    private function getUri(){
        // URI da Request
        $uri = $this->request->getUri();

        // Fatia a uri com prefixo
        $xUri = strlen($this->prefix) ? explode($this->prefix,$uri) : [$uri];
    }

    /**
     * metodo responsavel por retornar os dados da rota atual
     *
     * @return array
     */
    private function getRoute(){
        // URI
        $uri = $this->getUri();
    }

    /**
     * Metodo responsavel por executar a rota atual
     *
     * @return Response
     */
    public function run(){
        try{
            // obtem rota atual
            $route = $this->getRoute();
        }catch(Exception $e){
            return new Response($e->getCode(), $e->getMessage());
        }
    }

}// Router
