<?php

#
# Page
#
class Page {

    #
    #
    #
    function __construct($path_to_file_md) {

        $this->md = $this->read($path_to_file_md);

        $parser   = new \Mni\FrontYAML\Parser();
        // var_dump($parser); die();

        $document = $parser->parse($this->md);
        // var_dump($document); die();

        $front    = $document->getYAML();
        // var_dump($front); die();

        $content  = $document->getContent();
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
    function read($path_to_file_md) {
        $site = $GLOBALS['site'];
        return file_get_contents($site->path['/'] . $path_to_file_md);
    }


}

