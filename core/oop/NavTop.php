<?php

/**
 * Classe que acompanha a view "nav-top.php"
 */
class NavTop {

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
     * Seção ativa
     *
     * A seção aqui anotada será assinalada no componetne 'views/nav-top.php'
     * O valor é a chave da seção
     *
     */
    public $secaoAtiva = "";

}

?>
