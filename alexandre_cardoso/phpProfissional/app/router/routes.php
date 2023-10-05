<?php 
/**
 * cria todas as rotas  e é chamado na função routes
 */
return [
    '/' => 'Home@index',
    '/user/create' => 'User@create',
    '/user/[0-9]+' => 'User@index'
];


?>