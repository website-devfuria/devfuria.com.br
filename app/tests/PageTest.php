<?php

require_once dirname(__FILE__) . '/../vendor/autoload.php';
require_once dirname(__FILE__) . '/../boot.php';


#
#
#
class FooLishTest extends PHPUnit\Framework\TestCase {

    #
    #
    #
    public function testPageFabric() {
        $page = new Page('/python/index.md');

        $this->assertInstanceOf("Page", $page);

        $this->assertTrue(is_string($page->title));
        $this->assertTrue(is_string($page->content));

    }

    #
    #
    #
    public function testRead() {
        $p = new Page('/python/index.md');
        $this->assertTrue(is_string($p->md));
    }


}