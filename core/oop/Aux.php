<?php

/**
 * Classe com funções auxiliares
 */
class Aux {


    /**
     * Função utilizada para compor as âncoras
     *
     * A idéia é passar um código e criar a âncora apartir desse código
     * O código em questão é a url, só uma parte dela, ex: "js/basico/intro"
     *
     * <code>
     * echo Aux::printAncora("/js/basico/intro/");
     * </code>
     *
     * Obs: esta função é para ser utilizada pelas views (matérias)
     *
     * @param type $url
     * @param type $label
     * @throws Exception
     */
    static function printAncora($url, $label = "") {
        $url = self::retFragmentoURL($url);
        $pag = self::getPagina($url[0]);

        # se não achar a página...
        if (!$pag) {
            throw new Exception("Código de âncora não localizada ($url)!");
        }

        $ancora = array(
            "href" => (count($url) != 1) ? $pag->url . "#" . $url[1] : $pag->url,
            "title" => $pag->titulo,
            "label" => ($label == "titulo") ? $pag->titulo : $pag->url
        );
        self::ancora($ancora);
    }

    /**
     * Este método é um "alias" para a função $pag->getPagina($codigo)
     * Eu não queria transformar o método em estático então fiz o álias.
     *
     * @param type $codigo
     * @return type
     */
    static function getPagina($url) {

        $pag = new Paginas();
        return $pag->getPagina($url);
    }

    /**
     * Abstrai a âncora html
     *
     * @param type $a
     */
    private static function ancora($a) {
        echo "<a href='" . LINKS_PATH . $a['href'] . "' title=\"{$a['title']}\">{$a['label']}</a>";
    }

    /**
     * Se passarmos uma url "past/pasta/past/#outra-parte"
     * ele serparará seguno o sinal de sharpe (#)
     *
     * @param type $url
     * @return type
     */
    private static function retFragmentoURL($url) {
        $url = explode("#", $url);

        return $url;
    }
}
