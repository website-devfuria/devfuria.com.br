<?php

namespace oop;

#
# Url
#
class Url {

    #
    #
    #
    function get_home() {
        // var_dump(($this->base == '') ?  '/' : $this->base); die();
        return ($this->base == '') ?  '/' : $this->base;
    }

}

