<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../boot.php';

class LogTest extends PHPUnit\Framework\TestCase {

    static $file;

    public function testPaginaNaoEncontrada() {
        self::$file = log_pagina_nao_encontrada('path/to/page');
        $this->assertTrue(true);
    }

    public static function tearDownAfterClass() {
        if (is_file(self::$file)) {
            unlink(self::$file);
        }
    }

}