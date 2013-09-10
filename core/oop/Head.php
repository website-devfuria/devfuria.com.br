<?php

/**
 * Descrição do arquivo
 */

/**
 * Descrição da classe
 */
class Head {

    public $title;
    public $description;
    public $keywords;

    function setTitle($title) {
        $this->title = $title . " | " . DOMINIO;
    }

}

?>
