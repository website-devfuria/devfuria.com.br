<?php

require "SuaClasse.php";


class SuaClasseTest extends PHPUnit_Framework_TestCase
{

    public function testFoo(){

        $obj = new SuaClasse();
        $this->assertTrue($obj->foo(10, 15, 7));
        $this->assertFalse($obj->foo(10, 15, 40));
    }
}