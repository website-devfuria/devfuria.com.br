<?php

/**
 *
 */
class Paginas {

    private $pdo;


    /**
     *
     * @param type $conexao
     */
    function __construct($conexao) {
        $this->pdo = $conexao;
    }

    /**
     *
     * @return type
     */
    function getAll() {

        $res = $this->pdo->query("SELECT * FROM paginas ORDER BY secao, sub_secao, id");
        return $res->fetchAll(\PDO::FETCH_OBJ);
    }

}
