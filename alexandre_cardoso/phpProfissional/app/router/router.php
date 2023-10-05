<?php 

function routes():array{

   return require 'routes.php'; // arquivo responsável por ter todas as rotas

} // routes

/**
 * exactMatchUriInArray
 *  verifica se há no array o indice  captado no URI
 * @param string $uri
 * @param array $routes
 */

function exactMatchUriInArrayRoutes($uri, $routes){
    if(array_key_exists($uri, $routes)){
        return [$uri => $routes[$uri]];
    }

    return [];
    
} //exactMatchUriInArrayRoutes

function regularExprionMathArrayRoutes($uri, $routes){
    $mathedUri =  array_filter(
        ($routes),
         function($value) use($uri){
             $regex = str_replace('/', '\/',ltrim($value,'/'));
             return preg_match("/^$regex$/", ltrim($uri, '/'));
         },
         ARRAY_FILTER_USE_KEY
     );
}

/**
 * router
 *  pegar URI do usuario
 * @return void
 */
function router(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 

    // Verifica se existe URI em um dos indices
    $routes = routes();

    $mathedUri = exactMatchUriInArrayRoutes($uri, $routes);

    if(empty($mathedUri)){
        $mathedUri = regularExprionMathArrayRoutes($uri, $routes);
    }

    var_dump($mathedUri);
  
} //router

?>