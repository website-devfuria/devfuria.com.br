<?php
/**
 *
 */
/**
 *
 */
class Materia {

    const PHP      = "php";
    const JS       = "js";
    const HTML_CSS = "html-css";


    /**
     *
     */
    function carregar($id) {

        $xml = simplexml_load_file($xml = BASE_PATH.'furia/materias-lista-home.xml');
        $obj = $xml->secao[$id]->nivel->basico->materia;
                
        $this->url            = $obj->url;
        $this->titulo         = $obj->titulo;
        $this->resumo         = $obj->resumo;
        $this->keywords       = $obj->keywords;
        $this->nivel          = "basico";
        $this->secao          = $xml->secao[$id]->nome;
        $this->autor          = $obj->autor;
        $this->dt_criacao     = $obj->dt_criacao;
        $this->dt_atualizacao = $obj->dt_atualizacao;

    }


    /**
     *
     * @param type $where
     * @return type
     */
    function getListaParcial() {

        $materias = array();

        $xml = simplexml_load_file(BASE_PATH.'furia/materias-lista-home.xml');

        
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
     * @param type $where
     * @return type
     */
    static function getObjects($secao=null) {

        $materias = array();

        $xml = simplexml_load_file(BASE_PATH.'furia/materias-lista-home.xml');
        
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