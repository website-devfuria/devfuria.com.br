<?php

/**
 * Classe que acompanha a view "lista-secao.php"
 */
class ListaSecao {

    public $links;       # links escolhido (Seção)
    public $link_ativo;  # link ativo (matéria)
    public $label;       # Nome da lista (se for diferente do padrão)

    const LABEL_CURSO_JS = "Curso de Javascript";
    const LABEL_CURSO_PHP = "Curso de PHP";
    const LABEL_CURSO_LOG = "Curso de Lógica de Programação";
    const LABEL_CURSO_HTML = "Curso de HTML & CSS";
    const LABEL_CURSO_MYSQL = "Curso de MySql & SQL";
    const LABEL_CURSO_ER = "Curso de Expressões Regulares (regexp)";

    const LABEL_GUIA_JS = "Receitas e Guia de Referência de Javascript";
    const LABEL_GUIA_PHP = "Receitas e Guia de Referência de PHP";
    const LABEL_GUIA_LOG = "Receitas e Guia de Referência de Lógica de Programação";
    const LABEL_GUIA_HTML = "Receitas e Guia de Referência de HTML & CSS";
    const LABEL_GUIA_MYSQL = "Receitas e Guia de Referência de MySql & SQL";
    const LABEL_GUIA_ER = "Receitas e Guia de Referência de Expressões Regulares (regexp)";

    /**
     * Seta os links que são exibidos nas listas de navegação das matérias
     *
     * @param type $linksTodos
     * @param type $links_secao
     */
    function setLinks($todasPaginas, $secao, $sub_secao) {
        $this->links = $todasPaginas[$secao][$sub_secao];
    }

}

?>
