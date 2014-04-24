<?php

/**
 *
 */
class View {


    /**
     * Classe que manipula o cabecalho
     *
     * @var type object Head
     */
    public $head;
    /**
     * Classe que manipula a barra de navegação
     *
     * @var type object NavTop
     */
    public $navtop;

    /**
     * Classe que manipula as listas de links de cada seção
     *
     * @var type object ListaSecao
     */
    public $lista;

    /**
     *
     * @var type object Paginacao
     */
    public $paginacao;

    function __construct() {
        $this->head = new Head();
        $this->navtop = new NavTop();
        $this->lista = new ListaSecao();
        $this->paginacao = new Paginacao();
    }

}
?>