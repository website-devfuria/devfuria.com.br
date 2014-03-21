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

        $model = new Model();
        return $model->getPagina($url);
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

    /**
     * A função dataConversor é responsavél por alterar o formato da data em dois tipos:
     *
     * 1.) Data de Visualização:
     *     Recebe a data com o formato Americano (Y-m-d) e converte para o formato Brasileiro (d-m-Y)
     *     Para isso é necessário utilizar a função data_converte_para_visualizar.
     *
     *     Exemplo:
     *     $date = FuncAux::data_converte_para_visualizar('2012-07-13');
     *
     * 2.) Data de Gravação:
     *     Recebe a data com o formato Brasileiro (d-m-Y) e converte para o formato Americano (Y-m-d)
     *     Para isso é necessário utilizar a função data_converte_para_mysql.
     *
     *     Exemplo:
     *     $date = FuncAux::data_converte_para_mysql('2012-07-13');
     *
     * @param type $formato_entrada
     * @param type $formato_saida
     * @param type $str_data
     * @return type
     */
    static function dataConversor($formato_entrada, $formato_saida, $str_data) {

        date_default_timezone_set('America/Sao_Paulo');
        $date = DateTime::createFromFormat($formato_entrada, $str_data);

        if ($date)
            return $date->format($formato_saida);
        else
            return null;
    }

    /**
     * É responsável pela conversão do formato americano para o brasileiro,
     * essa instancia a função dataConversor lhe enviando todos os parametros
     * solicitados para a realização da função.
     *
     * @param type $data
     * @return type
     */
    static function data_converte_para_visualizar($data) {
        return self::dataConversor("Y-m-j", "j/m/Y", $data);
    }

    /**
     * É responsável pela conversão do formato brasileiro para o americano,
     * essa instancia a função dataConversor lhe enviando todos os parametros
     * solicitados para a realização da função.
     *
     * @param type $data
     * @return type
     */
    static function data_converte_para_mysql($data) {
        return self::dataConversor("j/m/Y", "Y-m-j", $data);
    }

}
