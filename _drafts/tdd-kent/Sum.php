<?php

class Sum {
    public $augend; //type Money
    public $addend; //type Money
    
    function __construct($augend, $addend) {
        $this->augend = $augend;
        $this->addend = $addend;
    }
    
    function reduce($bank, $to) {
        $amount = $this->augend->amount + $this->addend->amount;
        return new Money($amount, $to);        
    }
}
