<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../app.php';

class LogTest extends PHPUnit_Framework_TestCase {

    static $file;

    public function testPaginaNaoEncontrada() {
        self::$file = log_pagina_nao_encontrada('path/to/page');
    }

    public static function tearDownAfterClass() {
        if (is_file(self::$file)) {
            unlink(self::$file);
        }
    }

}

?>