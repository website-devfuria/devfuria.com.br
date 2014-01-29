<?php

class Triangulo {
    
    public $a;
    public $b;
    public $c;

    
    function checar() {
        
        $flag = false;
        
        if($this->a < ($this->b + $this->c)) {
            $flag = true;
        }
        
        if($this->b < ($this->a + $this->c)) {
            $flag = true;
        }
        
        if($this->c < ($this->a + $this->b)) {
            $flag = true;
        }
        
        if($flag){
            return true;
        } else {
            return false;
        }
        
    }    
    
//    function checar() {
//        if ($this->a < ($this->b + $this->c)) {
//            if ($this->b < ($this->a + $this->c)) {
//                if ($this->c < ($this->a + $this->b)) {
//                    return true;
//                }
//            }
//        }
//
//        # senão ...
//        return false;
//    }

//    function checar() {
//        if ($this->a < ($this->b + $this->c)) {
//            if ($this->b < ($this->a + $this->c)) {
//                if ($this->c < ($this->a + $this->b)) {
//                    return true;
//                }
//            }
//        }
//
//        # senão ...
//        return false;
//    }    
    
}