<?php

require "Dollar.php";


class DollarTest extends PHPUnit_Framework_TestCase
{

    public function testMultiplicattion(){
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }
    
    public function testEquality() {
        $d = new Dollar(5);
        $this->assertTrue($d->equals(new Dollar(5)));
        
        $d = new Dollar(5);
        $this->assertFalse($d->equals(new Dollar(6)));
    }
}