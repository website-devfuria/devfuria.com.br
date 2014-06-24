<?php

require "Money.php";

class FooTest extends PHPUnit_Framework_TestCase
{

    public function testMultiplicattion(){
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testEquality() {
        $d = Money::dollar(5);
        $this->assertTrue($d->equals(Money::dollar(5)));
        $d = Money::dollar(5);
        $this->assertFalse($d->equals(Money::dollar(6)));

        $f = Money::franc(5);
        $this->assertFalse($f->equals($d));
    }

    public function testCurrency() {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
    
}