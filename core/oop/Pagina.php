<?php

/**
 * Representa uma pagina web no site
 *
 */
class Pagina {

    public $ordem;
    public $url;
    public $urlLabel;
    public $titulo;
    public $descricao;
    public $metaTitle;
    public $metaDescr;
    public $metaKeywords;
    public $secao;
    public $categoria;
    public $status;
    public $dtCriacao;
    public $dtAtualizacao;
    public $autor;

    public function getDtCriacao() {
        return Aux::data_converte_para_visualizar($this->dtCriacao);
    }

    public function getDtAtualizacao() {
        return Aux::data_converte_para_visualizar($this->dtAtualizacao);
    }

    function retDiferencEntreHojeDtAtualizacao() {
        $datetime1 = new DateTime($this->dtAtualizacao);
        $datetime2 = new DateTime(date("Y-m-d"));
//        return $datetime1->diff($datetime2)->format('%R%a');
        return $datetime1->diff($datetime2)->format('%m');
    }

}

?>