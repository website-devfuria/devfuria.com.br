<?php

require "SuaClasse.php";


class SuaClasseTest extends PHPUnit_Framework_TestCase
{

    public function testFoo(){

        $obj = new SuaClasse();
        $this->assertEquals(1, $obj->foo());
    }
}