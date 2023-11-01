<?php 
namespace App\Http;

class Request{

    /**
     * metodo http da requisição
     *
     * @var string
     */
    private $httpMethod;

    /**
     * uri da página
     *
     * @var string
     */
    private $uri;

    /**
     * Parametros da URL
     * @var array
     */
    private $queryParams = [];

    /**
     * Variavies recebidas por ($_POST) da página
     * @var array
     */
    private $postVars = [];

    /** 
     * Guardar cabeçelho da requisição
     * @var array
     */
    private $headers = [];

    /**
     * Constructor da classe
     */
    public function __construct(){
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_GET ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    } // construct


    /**
     * Metodo responsavel por retornar o metodo Http
     *
     * @return string
     *      
     * */
    public function getHttpMethod(){
        return $this->httpMethod;
    }

      /**
     * Metodo responsavel por retornar a uri da requisição
     *
     * @return string
     *      
     * */
    public function getUri(){
        return $this->uri;
    }

      /**
     * Metodo responsavel por retornar o headers da pagina
     *
     * @return array
     *      
     * */
    public function getheaders(){
        return $this->headers;
    }


      /**
     * Metodo responsavel por retornar os parametros da URL da requisição
     *
     * @return array
     *      
     * */
    public function getParams(){
        return $this->queryParams;
    }

      /**
     * Metodo responsavel por retornar as variaveis posts  da requisição
     *
     * @return array
     *      
     * */
    public function getPostVars(){
        return $this->postVars;
    }

} // Request

?>