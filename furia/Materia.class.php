<?php
/**
 *
 */
/**
 *
 */
class Materia {

    const BASICO = "básico";
    const INTER  = "intermediário";
    const AVANC  = "avançado";
    
    const REGEXP   = "regexp";
    const MYSQL    = "mysql";
    const LOGICA   = "logica";
    const PHP      = "php";
    const JS       = "js";
    const HTML_CSS = "html-css";
 
    const idXML_REGEXP   = 5;
    const idXML_MYSQL    = 4;
    const idXML_LOGICA   = 3;
    const idXML_PHP      = 2;
    const idXML_JS       = 1;
    const idXML_HTML_CSS = 0;    
    
    
    /**
     * 
     * Carrega  a matéria conforme o id do xml.
     * 
     * @param type $id
     */
    function carregar($id_secao, $id_materia) {

        $xml = simplexml_load_file($xml = BASE_PATH.'/materias-lista-home.xml');
        $obj = $xml->secao[$id_secao]->nivel->basico->materia[$id_materia];
                
        $this->url            = $obj->url;
        $this->titulo         = $obj->titulo;
        $this->resumo         = $obj->resumo;
        $this->keywords       = $obj->keywords;
        $this->secao          = $xml->secao[$id_secao]->nome;
        $this->autor          = $obj->autor;
        $this->dt_criacao     = $obj->dt_criacao;
        $this->dt_atualizacao = $obj->dt_atualizacao;

    }

   /**
    * Seta o nível da matéria
    */
    function setNivel($nivel){
        $this->nivel = $nivel;
    }


    /**
     *
     * 
     * @return type
     */
    function getListaParcial() {

        $materias = array();

        $xml = simplexml_load_file(BASE_PATH.'/materias-lista-home.xml');

        
        switch ($this->secao) {
            case self::HTML_CSS:
                $materias = $xml->secao[0]->nivel->basico->materia;
                break;
            case self::JS:
                $materias = $xml->secao[1]->nivel->basico->materia;
                break;
            case self::PHP:
                $materias = $xml->secao[2]->nivel->basico->materia;
                break;
        }        
        
        return $materias;

    }

    /**
     *
     * 
     * @param type $secao
     * @return type
     */
    static function getObjects($secao=null) {

        $materias = array();

        $xml = simplexml_load_file(BASE_PATH.'/materias-lista-home.xml');
        
        switch ($secao) {
            case self::HTML_CSS:
                $materias = $xml->secao[0]->nivel->basico->materia;
                break;
            case self::JS:
                $materias = $xml->secao[1]->nivel->basico->materia;
                break;
            case self::PHP:
                $materias = $xml->secao[2]->nivel->basico->materia;
                break;
        }
        
        return $materias;

    }    
    

    /**
     * Retorna as palavras cheves conforme a seção
     *
     * @return type
     */
    function getKeyWords(){
        switch ($this->secao) {
            case self::PHP:
                return KEYWORDS_PHP . $this->keywords;
                break;
            case self::JS:
                return KEYWORDS_JS . $this->keywords;
                break;
        }
    }

}
?>
