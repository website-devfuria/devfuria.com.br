<?php

require_once __DIR__ . '/../boot.php';

use oop\Page;

#
#
#
class PageTest extends PHPUnit\Framework\TestCase {


    public function testPageFabric() {
        $page = Page::getPage("/python/");

        $this->assertInstanceOf("oop\Page", $page);

        $this->assertTrue(is_string($page->md));
        $this->assertTrue(is_string($page->title));
        $this->assertTrue(is_string($page->content));

    }

    #
    # Se apagar a seção python/, esse teste irá falhar
    #
    public function testFoo() {
        $page = Page::getPage("/python/");
        $this->assertTrue($page->exist());
    }

}