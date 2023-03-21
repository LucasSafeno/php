<?php

namespace App\Classes;

class Uri
{
    private $uri;

    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    } // contruct

    public function emptyUri()
    {
        return ($this->uri == '/' ? true : false);
    } // emptyUri

    public function getUri()
    {
        return $this->uri;
    }
}// Uri