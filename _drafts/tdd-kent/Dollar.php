<?php
require_once "Money.php";

class Dollar extends Money {

    function times($multiplier) {
        return Money::dollar($this->amount * $multiplier);
    }
}