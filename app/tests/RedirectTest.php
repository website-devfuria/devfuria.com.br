<?php

require_once __DIR__ . '/../boot.php';

use oop\Redirect;

#
#
#
class RedirectTest extends PHPUnit\Framework\TestCase {


    public function testRedirect() {
        $redirect = new Redirect('/js/');
        $this->assertEquals('/javascript/', $redirect->new_destination);
    }

    public function testDontExist() {
        $redirect = new Redirect('not-found/uri');
        $this->assertEquals('', $redirect->new_destination);
    }

    public function testSlash() {
        $redirect = new Redirect('path/to/foo');
        $this->assertEquals('path/to/foo/', $redirect->acrescentar_barra_no_final('path/to/foo'));
    }

    public function testJavaScritpFoo() {
        $redirect = new Redirect('');
        $this->assertEquals('/javascript/foo/', $redirect->redirecionar_javascript_refs('/javascript/refs/foo'));
        $this->assertEquals('', $redirect->new_destination);
    }

}