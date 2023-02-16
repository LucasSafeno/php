<?php
namespace app\routes;

class Routes{
    public static function get(){
        return[
            'get' => [
                '/' => 'HomeController@index',
                '/user/[0-9]+' => 'UserController@index',
                '/register' => 'RegisteredController@index'
            ],
            'post' => []
        ];
    }// get
}// Routes