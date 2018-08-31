<?php

namespace oop;

use oop\File;
use oop\Url;
use oop\Path;

#
# Page
#
class Page {

    public $layout = null;

    #
    #
    #
    static function getPage($uri) {
        $page = new Page(new File($uri, $GLOBALS['site']));
        $page->secao = $page->file->uri->arr[1];
        return $page;
    }

    #
    #
    #
    function __construct($file) {

        $this->file = $file;

        if(!$this->file->exist()) {
            return null;
        }

        $this->md = file_get_contents($this->file->path->base);

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
    function exist() {
        return $this->file->exist();
    }

    // #
    // #
    // #
    // function isSection() {
    //     return  (count($this->file->uri->arr) == 3) ? true : false;
    //     # também poderia ser: tem seção mas não tem capítulo
    // }


    #
    # Precisa refatorar essa desgraça...
    #
    function setPrevAndNext() {

        $urls = array_keys($this->menu);

        for ($i = 0; $i < count($urls); $i++) {
            if ($this->file->uri->str == $urls[$i]) {
                $url_prev = array_key_exists($i-1, $urls) ?  $urls[$i-1] : "";
                $url_acti = $urls[$i];
                $url_next = array_key_exists($i+1, $urls) ?  $urls[$i+1] : "";
            }
        }
        // var_dump("$url_prev | $url_acti | $url_next"); die();

        if (array_key_exists($url_prev, $this->menu)) {
            $this->prev = ['url' => $url_prev, 'tittle' => $this->menu[$url_prev]];
        } else {
            $this->prev = ['url' => '', 'tittle' => ''];
        }

        if (array_key_exists($url_next, $this->menu)) {
            $this->next = ['url' => $url_next, 'tittle' => $this->menu[$url_next]];
        } else {
            $this->next = ['url' => '', 'tittle' => ''];
        }
        // var_dump($this->prev, $this->next); die();

    }

}

