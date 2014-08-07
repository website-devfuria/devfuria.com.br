<?php

class Bank {

    public $rates;

    function reduce($source, $to) {
        return $source->reduce($this, $to);
    }

    function rate($from, $to) {
//        return ($from == "CHF" && $to == "USD") ? 2 : 1;
        $key = $from . $to;
        return $this->rates[$key];
    }

    function addRate($from, $to, $rate) {
        $key = $from . $to;
        $this->rates[$key] = $rate;
    }

}
