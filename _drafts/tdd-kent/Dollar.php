<?php

class Dollar {

    public $amount;
    
    function __construct($amount) {
        $this->amount = $amount;
    }
    
    function times($multiplier) {
        //$this->amount *= 2;
        return new Dollar($this->amount * $multiplier);
    }
}