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
    return [];
  }

  return [];
} // exactMathUriInArrayRoutes


function router()
{
  $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  $routes = routes();
  $matchedUri = exactMathUriInArrayRoutes($uri, $routes);
} // router()