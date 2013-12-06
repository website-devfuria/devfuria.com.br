<?php

/**
 * Classe que acompanha a view "head.php"
 */
class Head {

    public $title;
    public $description;
    public $keywords;
    public $author;

    function setTitle($title) {
        $this->title = $title . " | " . DOMINIO;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setkeywords($keywords) {
        $this->keywords = $keywords;
    }

    function setAuthor($author=null) {
        if($author) {
            $this->author = $author;
        } else {
            $this->author = "Flávio Alexandre Micheletti";
        }
    }

}

?>
