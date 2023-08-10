<?php 
namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap{


    // Rotas que a app possui
    protected function initRoutes(){
        $routes['home'] = array(
            'route'         => '/',
            'controller'    => 'indexController',
            'action'        => 'index'
        );

        $routes['inscreverse'] = array(
            'route'         => '/inscreverse',
            'controller'    => 'indexController',
            'action'        => 'inscreverse'
        );
        

        $this->setRoutes($routes);

    } // initRoutes()



} // Route

?>