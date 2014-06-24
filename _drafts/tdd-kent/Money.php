<?php

class Money {
    protected $amount;    
    
    static function dollar($amount) {
        return new Dollar($amount);
    }
    
    static function franc($amount) {
        return new Franc($amount);
    }
    
    function equals($money) {
//        # pag 54:        
//        $this->getClass()->equals($money->getClass());
        return ($this->amount == $money->amount) && (get_class($this) == get_class($money));
    }    
}
