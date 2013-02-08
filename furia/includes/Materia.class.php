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
        $this->dt_atualizacao = FuncAux::data_converte_para_visualizar($obj->dt_atualizacao);
        $this->dt_criacao     = FuncAux::data_converte_para_visualizar($obj->dt_criacao);
        $this->ordem          = $obj->ordem;
    }


    /**
     *
     * @param type $where
     * @return type
     */
    static function getObjects($where=null, $order=null) {

        $materias = array();

        $orderby = $order ? $order : "ORDER BY ordem ASC";

        $sql  = "SELECT * FROM materias $where $orderby";

        $stmt = Conn::getConexao()->query($sql);
        while( $materia = $stmt->fetch(PDO::FETCH_OBJ)  ):
            $materia->dt_criacao     = FuncAux::data_converte_para_visualizar($materia->dt_criacao);
            $materia->dt_atualizacao = FuncAux::data_converte_para_visualizar($materia->dt_atualizacao);
            $materias[] = $materia;
        endwhile;

        return $materias;

    }

    /**
     *
     * @throws Exception
     */
    function inserir(){
        $sql = "INSERT INTO materias"
                ."(id, url, titulo, resumo, keywords, nivel, secao, autor, dt_atualizacao, dt_criacao, ordem)"
                ." VALUES( "
                ."'".$this->id."', "
                ."'".$this->url."', "
                ."'".$this->titulo."' ,"
                ."'".$this->resumo."' ,"
                ."'".$this->keywords."', "
                ."'".$this->nivel."', "
                ."'".$this->secao."', "
                ."'".$this->autor."', "
                ."'".$this->dt_atualizacao."', "
                ."'".$this->dt_criacao."', "
                .$this->ordem.")";
        $result = Conn::getConexao()->query($sql);
        if(!$result){
            $err = Conn::getConexao()->errorInfo();
            throw new Exception($err[2], $err[1]);
        }

        $this->id = Conn::getConexao()->lastInsertId();

    }

    /**
     *
     * @throws Exception
     */
    function update(){
        $sql = "UPDATE materias "
                ."SET "
                ."id = '".$this->id."', "
                ."url = '".$this->url."', "
                ."titulo = '".$this->titulo."' ,"
                ."resumo = '".$this->resumo."' ,"
                ."keywords = '".$this->keywords."', "
                ."nivel = '".$this->nivel."', "
                ."secao = '".$this->secao."', "
                ."autor = '".$this->autor."', "
                ."dt_atualizacao = '".$this->dt_atualizacao."', "
                ."dt_criacao = '".$this->dt_criacao."', "
                ."ordem = ".$this->ordem
                ." WHERE id = ".$this->id;

        $result = Conn::getConexao()->query($sql);
        if(!$result){
            $err = Conn::getConexao()->errorInfo();
            throw new Exception($err[2], $err[1]);
        }
    }


    /**
     *
     * @throws Exception
     */
    function deletar(){

        $sql = "DELETE FROM materias WHERE id = {$this->id} LIMIT 1";

        $result = Conn::getConexao()->query($sql);
        if(!$result){
            $err = Conn::getConexao()->errorInfo();
            throw new Exception($err[2], $err[1]);
        }
    }


    /**
     *
     * @param type $where
     * @return type
     */
    static function total_registros($where=null) {

        $sql  = "SELECT count(id) AS total FROM materias $where";

        $res = Conn::getConexao()->query($sql)->fetch(PDO::FETCH_OBJ)->total;

        return $res;

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