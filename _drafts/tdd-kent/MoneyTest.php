<?php

require "Bank.php";
require "Sum.php";
require "Money.php";

class FooTest extends PHPUnit_Framework_TestCase
{
    public function testSimpleAddition() {
        $five = Money::dollar(5);
        $sum  = $five->plus($five);
        
        $bank = new Bank();
        $moneyReduced = $bank->reduce($sum, "USD");
        
        $this->assertEquals(Money::dollar(10), $moneyReduced);
    }

    public function testPlusReturnSum() {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $this->assertEquals($five, $sum->augend);
        $this->assertEquals($five, $sum->addend);
    }

    public function testReduceSum() {
        $sum  = new Sum(Money::dollar(3), Money::dollar(4));
        $bank = new Bank();
        $this->assertEquals(Money::dollar(7), $bank->reduce($sum, "USD"));
    }

    public function testReduceMoney() {
        $bank = new Bank();
        $bank->addRate("USD", "USD", 1);
        $moneyReduced = $bank->reduce(Money::dollar(100), "USD");
        $this->assertEquals(Money::dollar(100), $moneyReduced);
    }
    
    public function testReduceMoneyDifferentCurrency() {
        $bank = new Bank();
        $bank->addRate("CHF", "USD", 2);
        $result = $bank->reduce(Money::franc(2), "USD");
        $this->assertEquals(Money::dollar(1), $result);
    }

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
        $this->assertFalse($f->equals(Money::dollar(5)));
    }

    public function testCurrency() {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }

}