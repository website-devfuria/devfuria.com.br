<?php

require_once __DIR__ . '/../boot.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use oop\Logs;

class LogsTest extends PHPUnit\Framework\TestCase {

    static $file;

    #
    # Criando o arquivo
    #
    public static function setUpBeforeClass() {
        $logs = new Logs($GLOBALS['site']);
        self::$file = $logs->criar_arquivo();
    }

    #
    # Temos a pasta /logs ?
    #
    public function testPastaLogs() {
        $this->assertTrue(file_exists($GLOBALS['site']->path->logs), "não temos a pasta 'logs/'");
    }

    #
    # Testando o nome do arquivo
    #
    public function testNomeDoArquivo() {
        $this->assertEquals($GLOBALS['site']->path->logs . "/" . date("Y-m-d"), self::$file, "nome do arquivo de log incorreto");
    }

    #
    # Arquivo criado existe ?
    #
    public function testSeArquivoExiste() {
        $this->assertTrue(file_exists(self::$file), "não temos o arquivo de log 'logs/" . self::$file . "'");
    }

    #
    # Testando o registro status 404
    #
    public function testPaginaNaoEncontrada() {
        self::$file = Logs::pagina_nao_encontrada('path/to/page');
        $this->assertTrue(true);
    }

    #
    # Deletando o arquivo
    #
    public static function tearDownAfterClass() {

        if (is_file(self::$file)) {
            unlink(self::$file);
        }
    }

}

?>