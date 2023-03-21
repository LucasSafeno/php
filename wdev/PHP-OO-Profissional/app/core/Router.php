<?php
namespace app\core;

class Router{
    public static function run(){

        try {
            $routerRegister = new RoutesFilter;
            $router = $routerRegister->get();

            $controler = new Controller;
            $controler->execute($router);

            dd($router);
    }catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }// run
        
}// Router