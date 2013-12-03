<?php

/**
 * Classe principal
 * Instanciada no boot
 */
class Core {

    const SECAO_JS = "js";
    const SECAO_PHP = "php";
    const SECAO_LOG = "logica";
    const SECAO_HTML = "html-css";
    const SECAO_MYSQL = "mysql";
    const SECAO_ER = "regexp";

    /**
     * Define quais as seções
     * Obs: As seções são caregadas no arquivo de boot
     * 
     * Ex:
     * $secoes['secao-ativa'] = "secao label";
     * $secoes['secao-ativa'] = "secao label";
     * $secoes['secao-ativa'] = "secao label";
     * 
     * @var type 
     */
    public $secoes = array();
    
    /**
     *
     * @var type 
     */
    public $links = array();

    /**
     * Classe que manipula o cabecalho
     * @var type 
     */
    public $head;

    /**
     * Classe que manipula a barra de navegação
     * @var type 
     */
    public $navtop;

    /**
     * Classe que manipula as listas de links de cada seção
     * @var type 
     */
    public $lista;

    /**
     * Construct
     */
    function __construct() {
        $this->head = new Head();
        $this->navtop = new NavTop();
        $this->lista = new ListaSecao();
    }

}

?>
