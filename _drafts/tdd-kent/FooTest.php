<?php

require "Dollar.php";
require "Franc.php";

class FooTest extends PHPUnit_Framework_TestCase
{

    public function testMultiplicattion(){
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    public function testFrancMultiplicattion(){
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }
    
    public function testEquality() {
        $d = new Dollar(5);
        $this->assertTrue($d->equals(new Dollar(5)));
        $d = new Dollar(5);
        $this->assertFalse($d->equals(new Dollar(6)));

        $f = new Franc(5);
        $this->assertTrue($f->equals(new Franc(5)));
        $f = new Franc(5);
        $this->assertFalse($f->equals(new Franc(6)));
        
        $this->assertFalse($f->equals($d));
    }
}