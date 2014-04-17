<?php

/**
 * Classe que acompanha a view "lista-secao.php"
 */
class ListaSecao {

    public $links;       # links escolhido (Seção)
    public $urlAtual;    # url atual (matéria)
    public $label;       # Nome da lista (se for diferente do padrão)



    /**
     * Seta os links que são exibidos nas listas de navegação das matérias
     *
     * @param type $linksTodos
     * @param type $links_secao
     */
    function setLinks($todasPaginas, $secao, $subSecao) {
        $this->links = $todasPaginas[$secao][$subSecao];
    }

    /**
     * Descobre a label do curso segundo a seção
     *
     * @param type $secao
     * @return string
     */
    function retLabelCursoSegundoSecao($secao) {

        # estes dados deveriam vir do DB?
        $labelDosCursos = array(
            Conteudo::SECAO_JS => "Curso de Javascript",
            Conteudo::SECAO_PHP => "Curso de PHP",
            Conteudo::SECAO_LOG => "Curso de Lógica de Programação",
            Conteudo::SECAO_HTML => "Curso de HTML & CSS",
            Conteudo::SECAO_MYSQL => "Curso de MySql & SQL",
            Conteudo::SECAO_ER => "Curso de Expressões Regulares (regexp)"
        );

        return $labelDosCursos[$secao];
    }

    /**
     * Descobre a label da referência segundo a seção
     *
     * @param type $secao
     * @return type
     */
    function retLabelReferenciaSegundoSecao($secao) {

        $prefixo = "Receitas, Tutoriais e Guia de Referência";

        # estes dados deveriam vir do DB?
        $labelDasReferecias = array(
            Conteudo::SECAO_JS => "$prefixo de Javascript",
            Conteudo::SECAO_PHP => "$prefixo de PHP",
            Conteudo::SECAO_LOG => "$prefixo de Lógica de Programação",
            Conteudo::SECAO_HTML => "$prefixo de HTML & CSS",
            Conteudo::SECAO_MYSQL => "$prefixo de MySql & SQL",
            Conteudo::SECAO_ER => "$prefixo de Expressões Regulares (regexp)"
        );

        return $labelDasReferecias[$secao];
    }

    /**
     * Retorna a label da subsecao canvas
     *
     * @param type $secao
     * @return type
     */
    function retLabelSubsecaoCanvas() {

        $prefixo = "Canvas";
        return $prefixo;
    }
}

?>
