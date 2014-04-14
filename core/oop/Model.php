<?php

/**
 *
 */
class Model {

    private $pdo;

    /**
     * Na construção busca a conexão com o DB
     *
     * @param type $conexao
     */
    function __construct() {
        $this->pdo = $GLOBALS['pdo'];
    }

    /**
     * Retorna uma única página
     *
     * @param type $codigo
     * @return type
     */
    function getPagina($url) {
        $pagina_db = $this->pdo
                ->query("SELECT * FROM paginas WHERE url = '$url';")
                ->fetch(\PDO::FETCH_OBJ);

        if(!$pagina_db){
            throw new Exception("Página não encontrada ($url)");
        }

        return $this->fabricaPagina($pagina_db);
    }


    /**
     * Retorna a lista de paginas
     *
     * $arr[] = objeto Pagina
     * $arr[] = objeto Pagina
     * $arr[] = objeto Pagina
     *
     * @return type
     */
    function getPaginaAll($sql = "SELECT * FROM paginas ORDER BY secao, ordem") {
        $sth = $this->pdo->query($sql);
        return $this->retArrInstanciasDePagina($sth);
    }

    /**
     * Após consultarmos a tabela 'paginas' podemos criar um array
     * com objetos do tipo correto (Pagina)
     *
     * @param type $sth Consulta a tabela 'paginas'
     * @return type
     */
    private function retArrInstanciasDePagina($sth) {
        $arr = array();
        while ($pagina_db = $sth->fetchObject()) {
            $arr[] = $this->fabricaPagina($pagina_db);
        }
        return $arr;
    }

    /**
     * Cria (fabrica) uma página.
     *
     * @param type $pagina_db = $sth->fetchObject()
     * @return \Pagina
     */
    private function fabricaPagina($pagina_db) {
        $pagina = new Pagina();
        $pagina->ordem = $pagina_db->ordem;
        $pagina->url = $pagina_db->url;
        $pagina->urlLabel = $pagina_db->urlLabel;
        $pagina->titulo = $pagina_db->titulo;
        $pagina->descricao = $pagina_db->descricao;
        $pagina->metaTitle = $pagina_db->metaTitle;
        $pagina->metaDescr = $pagina_db->metaDescr;
        $pagina->secao = $pagina_db->secao;
        $pagina->subSecao = $pagina_db->subSecao;
        $pagina->status = $pagina_db->status;
        $pagina->dtCriacao = $pagina_db->dtCriacao;
        $pagina->dtAtualizacao = $pagina_db->dtAtualizacao;
        if ($pagina_db->autor) {
            $pagina->autor = $pagina_db->autor;
        } else {
            $pagina->autor = "Flávio Alexandre Micheletti";
        }

        return $pagina;
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
