<?php
namespace app\core;

class Router{
    public static function run(){
        $routerRegister = new RoutesFilter;
        $router = $routerRegister->get();

        dd($router);
    }// run()
}// Router