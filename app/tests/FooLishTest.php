<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../boot.php';


#
#
#
class FooLishTest extends PHPUnit\Framework\TestCase {

    protected $site;

    protected function setUp() {
        $this->site = $GLOBALS['site'];
    }


    #
    #
    #
    public function testPathRoot() {
        #
        # Se dominio.com.br/app/tests então
        #     devo voltar 2 casas
        #
        $path = dirname(dirname(dirname(__FILE__)));
        // print_r($path);

        $this->assertEquals($this->site->path['/'], $path);

    }






}