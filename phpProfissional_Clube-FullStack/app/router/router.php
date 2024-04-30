<?php

/**
 * Retorna as rotdas definidas no arquivo routes.php
 *
 * @return array
 */
function routes()
{
  return require 'routes.php';
} // routes()

/**
 * Procura a URI dentro do array de routas routes()
 *
 * @return array
 */
function exactMathUriInArrayRoutes($uri, $routes)
{
  if (array_key_exists($uri, $routes)) {
    return [$uri => $routes[$uri]];
  }

  return [];
} // exactMathUriInArrayRoutes

function regularExpressionMathArrayRoutes($uri, $routes)
{
  return $matchedUri = array_filter(
    array_keys($routes),
    function ($value) use ($uri) {
      $regex = str_replace('/', '\/', ltrim($value, '/'));

      return preg_match("/^$regex/", ltrim($uri, '/'));
    }
  );
}

function router()
{
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  $routes = routes();
  $matchedUri = exactMathUriInArrayRoutes($uri, $routes);

  if (empty($matchedUri)) {
    $matchedUri = regularExpressionMathArrayRoutes($uri, $routes);
  }

  var_dump($matchedUri);
  die();
} // router()