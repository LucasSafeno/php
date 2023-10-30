<?php 
namespace App\Controller\Pages;

use App\Utils\View;

class Page{
    /**
     * responsavel por renderizar o topo da página
     *
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');
    }

    /**
     * responsavel por renderizar o rodaé da página
     *
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/footer');
    }

    /**
     * Metodo responsável por retornar o conteúdo (view) da nossa página generica
     *
     * @return string
     */
    public static function getPage($title, $content){
        return View::render('pages/page',[
        'title' => $title,
        'header' => self::getHeader(),
        'content' => $content,
        'footer' => self::getFooter()
        ]);
    }// getHome
} // home

?>