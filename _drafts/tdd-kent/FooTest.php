<?php

require "Dollar.php";
require "Franc.php";

class FooTest extends PHPUnit_Framework_TestCase
{

    public function testMultiplicattion(){
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testFrancMultiplicattion(){
        $five = Money::franc(5);
        $this->assertEquals(Money::franc(10), $five->times(2));
        $this->assertEquals(Money::franc(15), $five->times(3));
    }
    
    public function testEquality() {
        $d = Money::dollar(5);
        $this->assertTrue($d->equals(Money::dollar(5)));
        $d = Money::dollar(5);
        $this->assertFalse($d->equals(Money::dollar(6)));

        $f = Money::franc(5);
        $this->assertTrue($f->equals(Money::franc(5)));
        $f = Money::franc(5);
        $this->assertFalse($f->equals(Money::franc(6)));
        
        $this->assertFalse($f->equals($d));
    }
}