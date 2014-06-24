<?php

class Money {
    public $amount;
    public $currency;

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

    function currency() {
        return $this->currency;
    }
    
    function equals($money) {
        return ($this->amount == $money->amount) && ($this->currency == $money->currency);
    }

    function times($multiplier) {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    function plus($addend) {
        return new Sum($this, $addend);
//        return new Money($this->amount + $addend->amount, $this->currency);
        
    }
    
    function reduce($to) {
        return $this;
    }  

}
