<?php

namespace App\Controllers;

use App\Classes\Uri;

class Controller
{

    const NAMESPACE_CONTROLLER = '\\App\\Controllers\\';
    const FODLERS_CONTROLLER = ['Site', 'Admin'];
    const ERROR_CONTROLLER = '\\App\\Controllers\\Erro\\ErroController';

    private $uri;

    public function __construct()
    {
        $this->uri = new Uri();
    }

    private function getController()
    {
        if (!$this->uri->emptyUri()) {
            $explodeUri = array_filter(explode('/', $this->uri->getUri()));

            return ucfirst($explodeUri[1]).'Controller';
            
        }else{
            return ucfirst(DEFAULT_CONTROLLER).'Controller';
        }
    } // getController

    public function controller(){
        $controller = $this->getController();

        foreach(self::FODLERS_CONTROLLER as $folderController){
            if(class_exists(self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller)){
                return self::NAMESPACE_CONTROLLER.$folderController.'\\'.$controller;
            }
        }
        return self::ERROR_CONTROLLER;

    }

} // controller