<?php 
namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page{
    /**
     * Metodo responsável por retornar o conteúdo (view) da home
     *
     * @return string
     */
    public static function getHome(){
        // organização
        $obOrganization = new Organization();

        // view da home
        $content =  View::render('pages/home',[
        'name' => $obOrganization->nome,
        'description' => $obOrganization->description,
        'site' => $obOrganization->site
        ]);

        // Retorna view da página
        return parent::getPage('WDEV Canal - Home', $content);
    }// getHome
} // home

?>