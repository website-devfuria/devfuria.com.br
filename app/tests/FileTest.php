<?php

require_once __DIR__ . '/../boot.php';

use oop\File;

#
#
#
class FileTest extends PHPUnit\Framework\TestCase {

    public function testFileArtigo() {
        $site = $GLOBALS['site'];

        $file = new File('/secao/artigo/', $site);

        $this->assertEquals("/secao/artigo/", $file->uri->str);
        $this->assertEquals("", $file->uri->arr[0]);
        $this->assertEquals("secao", $file->uri->arr[1]);
        $this->assertEquals("artigo", $file->uri->arr[2]);

        $this->assertEquals($site->path->base . "/secao/artigo/", $file->path->dir);
        $this->assertEquals($site->path->base . "/secao/artigo/index.md", $file->path->base);
    }

    public function testFileSecao() {
        $site = $GLOBALS['site'];

        $file = new File('/secao/', $site);

        $this->assertEquals("/secao/", $file->uri->str);
        $this->assertEquals("", $file->uri->arr[0]);
        $this->assertEquals("secao", $file->uri->arr[1]);

        $this->assertEquals($site->path->base . "/secao/", $file->path->dir);
        $this->assertEquals($site->path->base . "/secao/index.md", $file->path->base);
    }

    public function testFileHome() {
        $site = $GLOBALS['site'];

        $file = new File('/', $site);

        $this->assertEquals("/", $file->uri->str);
        $this->assertEquals("", $file->uri->arr[0]);
        $this->assertEquals("", $file->uri->arr[1]);

        $this->assertEquals($site->path->base . "/", $file->path->dir);
        $this->assertEquals($site->path->base . "/index.md", $file->path->base);
    }

    public function testFileExist() {

        $file = new File('/python/sintaxe-basica/', $GLOBALS['site']);
        $this->assertTrue($file->exist());

        $file = new File('/foo/bar', $GLOBALS['site']);
        $this->assertFalse($file->exist());
    }

}