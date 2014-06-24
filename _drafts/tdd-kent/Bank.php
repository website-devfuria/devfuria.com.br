<?php

class Bank {

    function reduce($source, $to) {
//        if($source instanceof Money) {
//            return $source->reduce($to);
//        }
        
        return $source->reduce($to);
    }
}
