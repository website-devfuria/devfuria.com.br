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
    function __construct() {
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

        $res = $this->pdo->query("SELECT * FROM paginas ORDER BY secao, sub_secao, id");
        return $res->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * Retorna uma única página 
     *
     * @param type $codigo
     * @return type
     */
    function getPagina($codigo) {

        $res = $this->pdo->query("SELECT * FROM paginas WHERE codigo = '$codigo';");
        return $res->fetch(\PDO::FETCH_OBJ);
    }

}
