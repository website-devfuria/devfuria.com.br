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
     * echo Aux::getAncora("/js/basico/intro/");
     * </code>
     *
     * Obs: esta função é para ser utilizada pelas views (matérias)
     *
     * @param type $url
     * @param type $label
     * @throws Exception
     */
<<<<<<< HEAD
    static function getAncora($url, $label = "") {
        $url = self::retFragmentoURL($url);

        $pag = self::getPagina($url[0]);
=======
    static function getAncora($url, $label="") {
        $pag = self::getPagina($url);
>>>>>>> 8d28c8800a0f6a561859f346383bb482681d6bd9

        # se não achar a página...
        if (!$pag) {
            throw new Exception("Código de âncora não localizada ($url)!");
        }

        $ancora = array(
<<<<<<< HEAD
            "href" => (count($url) != 1) ? $pag->url . "#" . $url[1] : $pag->url,
            "title" => $pag->titulo,
            "label" => ($label == "titulo") ? $pag->titulo : $pag->url
=======
            "href" => $pag->url,
            "title" => $pag->titulo,
            "label" => ($label == "titulo")? $pag->titulo :$pag->url
>>>>>>> 8d28c8800a0f6a561859f346383bb482681d6bd9
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
     *
     * @param type $a
     */
<<<<<<< HEAD
    private static function ancora($a) {
        echo "<a href='" . LINKS_PATH . $a['href'] . "' title=\"{$a['title']}\">{$a['label']}</a>";
    }

    private static function retFragmentoURL($url) {
        $url = explode("#", $url);

        return $url;
    }
=======
    private static function ancora($a){
        echo "<a href='" . LINKS_PATH . $a['href'] . "' title=\"{$a['title']}\">{$a['label']}</a>";
    }

>>>>>>> 8d28c8800a0f6a561859f346383bb482681d6bd9

}
