<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../boot.php';

class LogFoo extends PHPUnit\Framework\TestCase {

    protected $r;

    protected function setUp() {
        $this->r = new Regex();
        $this->r->subject = "foo {{ part-a }} bar {{ part-b }}";
    }

    // public function testFoo() {
    //     $esperado = "foo part-a bar part-b";
    //     $this->assertEquals($esperado, $this->r->compilar_menus());
    // }

    public function testFoo2() {
        $expressoes = ['/{{ part-a }}/', '/{{ part-b }}/'];
        $this->assertEquals($expressoes, $this->r->expresoes());

        $menus = ['part-a', 'part-b'];
        $this->assertEquals($menus, $this->r->menus());
    }

}