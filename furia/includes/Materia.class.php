<?php
/**
 * 
 */
/**
 *
 */
class Materia {
    
    
    /**
     * 
     * @param type $id
     */
    function __construct($id) {
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
    static function getObjects($where=null, $order=null) {
        
        $materias = array();
        
        $orderby = $order ? $order : "ORDER BY ordem ASC";
        
        $sql  = "SELECT * FROM materias $where $orderby";
        
        $stmt = Conn::getConexao()->query($sql);
        while( $materia = $stmt->fetch(PDO::FETCH_OBJ)  ):
            $materias[] = $materia;
        endwhile;        

        return $materias;
        
    }
    
}
?>