<?php 
namespace App\Http;

class Response{

    /** 
     * código do status http
     * @var integer
     */
    private $httpCode = 200;

    /**
     * cabeçalho do response
     * @var array
     */
    private $headers = [];

    /**
     * tipo de conteudo está sendo retornado
     *
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * conteudo do response
     *
     * @var mixed
     */
    private $content;

    /**
     * metodo responsavel por iniciar a classe e definir valores
     * @param integer $httpCode
     * @param mixed $content
     * @param string $contentType
     */
    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /**
     * metodo responsavel por alterar o content type do response
     *
     * @param string $contentType
     * @return void
     */
    public function setContentType($contentType){
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }// contentType
    
    /**
     * metodo reponsavel por adicionar um registro no cabeçalho do response
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }

    /**
     * metodo resposavel por enviar os headers para o navegador.
     *
     * @return void
     */
    private function sendHeaders(){
        // definir status
        http_response_code($this->httpCode);

        // ENVIAR HEADERS
        foreach($this->headers as $key => $value){
            header($key.':'.$value);
        }

    }

    /**
     * metodo responsavel por enviar a resposta para o usuário
     */
    public function sendResponse(){
        // Enviando os headers


        // imprime o conteudo
        $this->sendHeaders();
        switch($this->contentType){
            case 'text/html':
                echo $this->content;
                exit;
        }
    }

}// Response

?>