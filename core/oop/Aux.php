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
     * <code>
     * echo Aux::getAncora("/js/basico/intro/");
     * </code>
     *
     * Obs: esta função é para ser utilizada pelas views (matérias)
     *
     * @param type $url
     * @param type $secao
     */
    static function getAncora($codigo) {
        $modelPaginas = new Paginas($GLOBALS['pdo']);
        $materia = $modelPaginas->getPagina($codigo);

        # se não achar a página...
        if (!$materia) {
            throw new Exception("Código de âncora não localizada ($codigo)!");
        }

        echo "<a href=\"" . LINKS_PATH . $materia->url . "\" title=\"{$materia->titulo}\">{$materia->url}</a>";
    }

    /**
     * Este método é um "alias" para a função $pag->getPagina($codigo)
     * Eu não queria transformar o método em estático então fiz o álias.
     *
     * @param type $codigo
     * @return type
     */
    static function getPagina($codigo) {

        $pag = new Paginas();
        return $pag->getPagina($codigo);
    }

}
