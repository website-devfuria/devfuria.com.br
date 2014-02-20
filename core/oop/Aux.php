<?php

/**
 * Clase com funções auxiliares
 */
class Aux {

    /**
     * Função utilizada para compor as âncoras
     *
     * A idéia é passar um código e criar a âncora apartir desse código
     * O código em questão é a url, só uma parte dela, ex: "js/basico/intro"
     *
     *
     * <code>
     * echo Aux::getAncora("/js/basico/intro/", $core->links[Core::SECAO_JS]);
     * </code>
     *
     * Obs: esta função é para ser utilizada pelas views (matérias)
     *
     * @param type $url
     * @param type $secao
     */
    static function getAncora($url, $secao) {
        $href = LINKS_PATH . $url;
        $title = $secao[$href];
        $link = $href;
        echo "<a href=\"$href\" title=\"$title\">$link</a>";
    }

}
