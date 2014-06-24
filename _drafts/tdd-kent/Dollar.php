<?php
require_once "Money.php";

class Dollar extends Money {

    function __construct($amount) {
        $this->amount = $amount;
    }
    
    function times($multiplier) {
        return new Dollar($this->amount * $multiplier);
    }
}