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
     * A seção aqui anotada será assinalada no componente 'views/nav-top.php'
     * O valor é a chave da seção
     *
     */
    public $secaoAtiva = "";


    public function atualizarSecoes($secao, $subsecao) {
        
        $novaHRef =  $this->secoes[$secao]['href'] . "/?" . $subsecao;

        $this->secoes[$secao]['href'] = $novaHRef;
    }

}

?>
