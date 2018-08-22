<?php

namespace oop;

use oop\Url;
use oop\Path;

#
# File
#
class File {

    function __construct($uri, $site) {

        $this->uri  = new Url();
        $this->uri->str = $uri;
        $this->uri->arr = explode('/', $this->uri->str);

        $this->path = new Path();
        $this->path->dir      = $site->path->base . $this->uri->str;
        $this->path->base     = $site->path->base . "/" . $this->uri->str . "index.md";

    }

    function exist() {
        return $this->path->base ? true : false;
    }

}

