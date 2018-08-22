<?php

namespace oop;

use oop\File;
use oop\Url;
use oop\Path;

#
# Page
#
class Page {

    #
    #
    #
    static function getPage($uri) {
        return new Page(new File($uri, $GLOBALS['site']));
    }

    #
    #
    #
    function __construct($file) {

        $this->file = $file;

        $this->md   = file_get_contents($this->file->path->base);

        $parser     = new \Mni\FrontYAML\Parser();
        // var_dump($parser); die();

        $document   = $parser->parse($this->md);
        // var_dump($document); die();

        $front      = $document->getYAML();
        // var_dump($front); die();

        $content    = $document->getContent();
        // var_dump($content); die();
        // echo $content;

        $this->setFront($front);
        $this->content = $content;

        return true;

    }

    #
    #
    #
    function setFront($array) {
        foreach ($array as $key => $value) {
            $this->$key = $value;
        }
    }

    #
    #
    #
    function exist() {
        return $this->file->exist();
    }

}

