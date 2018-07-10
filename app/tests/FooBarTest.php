<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../boot.php';

class LogFooBar extends PHPUnit\Framework\TestCase {

    protected $r;

    protected function setUp() {
        $this->r = new Bar();
        $this->r->carregar_mapa();
        $this->r->subject = "foo {{ part-a }} bar {{ part-b }}";
    }



    public function testFoo1() {

        // $this->r = new Regex();
        // $this->r->subject = "foo {{ part-a }} bar {{ part-b }}";
        // $esperado = "foo part-a bar part-b";
        // $this->assertEquals($esperado, $this->r->compilar_menus());
    }

    public function testFoo2() {

        $this->assertEquals('<tag>menu-a</tag>', $this->r->mapa('menu-a'));
    }

}