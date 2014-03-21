<?php

/**
 * Classe principal
 * Instanciada no boot
 */
class Conteudo {

    const SECAO_JS = "js";
    const SECAO_PHP = "php";
    const SECAO_LOG = "logica";
    const SECAO_HTML = "html-css";
    const SECAO_MYSQL = "mysql";
    const SECAO_ER = "regexp";
    const CATEGORIA_CURSO = "curso";
    const CATEGORIA_GUIA = "receitas-tuto-guia";
//    const GUIA_JS = "js-guia";

    /**
     * Array multidimensional que armazena as páginas do site
     *
     * Ex:
     * $paginas[secao][categoria] = objeto Pagina
     * $paginas[secao][categoria] = objeto Pagina
     * $paginas[secao][categoria] = objeto Pagina
     *
     * @var type
     */
    public $paginas = array();


    /**
     * Função utilizada no boot
     *
     * @param type $paginas_db
     * @return type
     */
    function criaArrayPaginas($paginas_db) {
        $arr = array();
        foreach ($paginas_db as $pagina) {
            $arr[$pagina->secao][$pagina->categoria][] = $pagina;
        }
        return $arr;
    }

}

?>
