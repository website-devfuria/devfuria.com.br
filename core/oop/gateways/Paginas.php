<?php

/**
 *
 */
class Paginas {

    private $pdo;

    /**
     * Na construção busca a conexão com o DB
     *
     * @param type $conexao
     */
    function __construct($url = "") {
        $this->pdo = $GLOBALS['pdo'];
    }

    /**
     * Retorna a lista de paginas
     *
     * $arr[] = objeto pagina
     * $arr[] = objeto pagina
     * $arr[] = objeto pagina
     *
     * @return type
     */
    function getAll() {

        $res = $this->pdo->query("SELECT * FROM paginas ORDER BY secao, categoria, id");
        return $res->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * Retorna uma única página
     *
     * @param type $codigo
     * @return type
     */
    function getPagina($url) {

        $res = $this->pdo->query("SELECT * FROM paginas WHERE url = '$url';");
        return $res->fetch(\PDO::FETCH_OBJ);
    }

    /**
     * Retorna um array com as seções
     * Utilizado para compor a navegação do site
     * 
     * @return type
     */
    function getArrSecoes() {
        
        return array(
            Conteudo::SECAO_JS => array(
                "href" => "js",
                "label" => "Javascript"
            ),
            Conteudo::SECAO_HTML => array(
                "href" => "html-css",
                "label" => "HTML & CSS"
            ),            
            Conteudo::SECAO_PHP => array(
                "href" => "php",
                "label" => "PHP"
            ),
            Conteudo::SECAO_MYSQL => array(
                "href" => "mysql-sql",
                "label" => "MySql & SQL"
            ),
            Conteudo::SECAO_ER => array(
                "href" => "regexp",
                "label" => "RegExp"
            ),
            Conteudo::SECAO_LOG => array(
                "href" => "logica-de-programacao",
                "label" => "Lógica de Programação"
            )            
        );
    }

}
