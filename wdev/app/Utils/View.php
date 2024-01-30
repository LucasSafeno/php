<?php 
    namespace App\Utils;

    class View{
        /**
         * Metodo responsável por retornar o conteudo de uma view
         *
         * @param string $view
         * @return string
         */
        private static function getContentView($view){
            $file = 'resources/view/'.$view.'.html';
            
            return file_exists($file) ? file_get_contents($file) : '';
        } //getContentView

        /**
         * Metodo responsável por renderizar o conteudo  renderizado de uma view
         *
         * @param string $view
         * @param array $vars (strings/numericos)
         * @return string
         */
        public static function render($view, $vars = []){
            // CONTEUDO DA VIEW
            $contentView = self::getContentView($view);

            // CHAVES DOS ARRAYS DE VARIAVEIS
            $keys = array_keys($vars);
            $keys = array_map(function($item){
                return '{{'.$item.'}}';
            },$keys);

            // retorna conteudo redenrizado
            return str_replace($keys, array_values($vars), $contentView);
        }// render()
    } // View


?>