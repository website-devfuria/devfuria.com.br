<?php

class Money {
    protected $amount;    
    
    function equals($money) {
//        # pag 54:        
//        $this->getClass()->equals($money->getClass());
        return ($this->amount == $money->amount) && (get_class($this) == get_class($money));
    }    
}
