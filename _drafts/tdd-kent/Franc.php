<?php

class Dollar {

    private $amount;
    
    function __construct($amount) {
        $this->amount = $amount;
    }
    
    function times($multiplier) {
        //$this->amount *= 2;
        return new Dollar($this->amount * $multiplier);
    }
    
    function equals($dollar) {
        return ($this->amount == $dollar->amount);
    }
}