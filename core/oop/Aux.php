<?php

/**
 * Clase com funções auxiliares
 */
class Aux {

    /**
     * Cria o objeto matéria através da url e seção indicados
     *
     * @param type $url Aqui é a url código
     * @param type $secao Array com a selção
     * @return \Materia
     * @throws Exception
     */
    static function retMateriaAtravesURL($url, $secao) {

        # agregando a raiz do site para o link (código)
        $urlCompleta = LINKS_PATH . $url;

        # se não achar a url na seção indicada...
        if (!array_key_exists($urlCompleta, $secao)) {
            var_dump($url, $secao);
            throw new Exception("Chave inexistente!");
        }

        # deu tudo certo...
        $materia         = new Materia();
        $materia->codigo = $url;
        $materia->url    = $urlCompleta;
        $materia->titulo = $secao[$urlCompleta];

        return $materia;
    }


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
        $materia = Aux::retMateriaAtravesURL($url, $secao);
        echo "<a href=\"{$materia->url}\" title=\"{$materia->titulo}\">{$materia->codigo}</a>";
    }


}
