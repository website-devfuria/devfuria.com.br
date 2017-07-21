<?php

require_once dirname(__FILE__) . '/../_site/vendor/autoload.php';
require_once dirname(__FILE__) . '/../app.php';

class LogsArquivoTest extends PHPUnit\Framework\TestCase {

    static $arquivo;
    static $file;

    public static function setUpBeforeClass() {
        self::$arquivo = criar_arquivo_log(App::$path['logs/']);
        self::$file = App::$path['logs/'] . self::$arquivo;
    }

    public function testPastaLogs() {
        $this->assertTrue(file_exists(App::$path['logs/']), "não temos a pasta 'logs/'");
    }

    public function testNomeDoArquivo() {
        $this->assertEquals(date("Y-m-d"), self::$arquivo, "nome do arquivo de log incorreto");
    }

    public function testSeArquivoExiste() {
        $this->assertTrue(file_exists(self::$file), "não temos o arquivo de log 'logs/" . self::$file . "'");
    }

    public static function tearDownAfterClass() {
        if (is_file(self::$file)) {
            unlink(self::$file);
        }
    }

}

?>