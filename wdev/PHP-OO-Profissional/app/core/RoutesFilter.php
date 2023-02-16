<?php

namespace app\core;

use app\routes\Routes;
use app\support\RequestType;
use app\support\Uir;

class RoutesFilter
{
    private string $uri;
    private string $method;
    private array $routesRegistered;


    public function __construct(){
        $this->uri = Uir::get();
        $this->method = RequestType::get();
        $this->routesRegistered = Routes::get();
    }

    private function simpleRouter(){
        if(array_key_exists($this->uri, $this->routesRegistered[$this->method])){
            return $this->routesRegistered[$this->method][$this->uri];
        }

        return null;
         
    } // simplesRouter

    private function dynamicRouter(){
        foreach($this->routesRegistered[$this->method] as $index => $route){
            $regex = str_replace('/', '\/', ltrim($index,'/'));
            if($index !== '/' && preg_match("/^$regex$/", trim($this->uri, '/'))){
                $routesRegisteredFound = $route;
                break;
            }else{
                $routesRegistered = null;
            }
        }//foreach

        return $routesRegisteredFound;

    } //dynamicRouter

    public function get(){

        $router = $this->simpleRouter();

        if($router){
            return $router;
        }
 
        $router =  $this->dynamicRouter();

        if($router){
            return $router;
        }

        return 'NotFoundController@index';
    } // get
    
} // RoutesFilter