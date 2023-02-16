<?php

namespace app\core;

class Controller
{

    public function execute(string $router){
        if(!str_contains($router, '@')){
            throw new \Exception("A rota está registrada com formato errado");
        }

        list($controller, $method) = explode('@', $router);

       // dd($controller, $method);

        $namespace = "app\controllers\\";

        //dd($namespace);

        $controllerNamespace = $namespace.$controller;

        if(!class_exists($controllerNamespace)){
            throw new \Exception("O controller {$controller} não existe");
        }

        $controller = new $controllerNamespace; 
        //dd($controller);


        if(!method_exists($controller, $method)){
            throw new \Exception("O método {$method} não existe no controller {$controllerNamespace}");
        }

        $controller->$method();


    }// execute

} // Controler