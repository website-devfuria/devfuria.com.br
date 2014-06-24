<?php

class Money {
    protected $amount;    
    
    function equals($money) {
        return ($this->amount == $money->amount);
    }    
}
