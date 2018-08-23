<?php

require_once __DIR__ . '/../boot.php';

use oop\Site;

#
#
#
class SiteTest extends PHPUnit\Framework\TestCase {


    public function testFoo() {

        $site = new Site();
        $this->assertEquals('layouts/artigo+menu.html', $site->getLayout());

    }

}