<?php
require_once "Money.php";

class Franc extends Money {

    function __construct($amount) {
        $this->amount = $amount;
    }
    
    function times($multiplier) {
        //$this->amount *= 2;
        return new Franc($this->amount * $multiplier);
    }
}