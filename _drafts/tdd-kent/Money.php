<?php

class Money {
    protected $amount;
    protected $currency;

    function __construct($amount, $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }    
    
    static function dollar($amount) {
        return new Dollar($amount, "USD");
    }

    static function franc($amount) {
        return new Franc($amount, "CHF");
    }

    function equals($money) {
//        # pag 54:
//        $this->getClass()->equals($money->getClass());
        return ($this->amount == $money->amount) && (get_class($this) == get_class($money));
    }

    function currency() {
        return $this->currency;
    }

}
