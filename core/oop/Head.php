<?php

/**
 * Classe que acompanha a view "head.php"
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
