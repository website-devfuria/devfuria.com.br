<?php

class Money {
    protected $amount;
    protected $currency;

    function __construct($amount, $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }    
    
    static function franc($amount) {
        return new Money($amount, "CHF");
    }
    
    static function dollar($amount) {
        return new Money($amount, "USD");
    }

    function equals($money) {
        return ($this->amount == $money->amount) && ($this->currency == $money->currency);
    }

    function currency() {
        return $this->currency;
    }
    
    function times($multiplier) {
        return new Money($this->amount * $multiplier, $this->currency);
    } 
    
}
