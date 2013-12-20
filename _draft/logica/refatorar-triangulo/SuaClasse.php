<?php

class SuaClasse {

    function foo($a, $b, $c) {

        if ($a < ($b + $c)) {
            if ($b < ($a + $c)) {
                if ($c < ($a + $b)) {
                    return true;
                }
            }
        }
        
        return false;

    }
//    function foo($a, $b, $c) {
//        
//        if ($a > ($b + $c)) {
//            return false;
//        }
//        if ($b > ($a + $c)) {
//            return false;
//        }
//        if ($c > ($a + $b)) {
//            return false;
//        }
//
//        return true;
//    }

}