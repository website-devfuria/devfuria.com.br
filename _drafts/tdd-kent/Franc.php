<?php
require_once "Money.php";

class Franc extends Money {

    function times($multiplier) {
        return Money::franc($this->amount * $multiplier);
    }
}