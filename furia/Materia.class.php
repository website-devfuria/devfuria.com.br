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
     * @param type $id
     */
    function __construct($id=null) {
        if($id){
            $this->id = $id;
            $this->carregar();
        }
    }

    /**
     *
     */
    function carregar() {

        $sql = "SELECT * FROM materias WHERE id = {$this->id}";
        $obj = Conn::getConexao()->query($sql)->fetch(PDO::FETCH_OBJ);

        $this->id             = $obj->id;
        $this->url            = $obj->url;
        $this->titulo         = $obj->titulo;
        $this->resumo         = $obj->resumo;
        $this->keywords       = $obj->keywords;
        $this->nivel          = $obj->nivel;
        $this->secao          = $obj->secao;
        $this->autor          = $obj->autor;
        $this->dt_atualizacao = $obj->dt_atualizacao;
        $this->dt_criacao     = $obj->dt_criacao;
        $this->ordem          = $obj->ordem;
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