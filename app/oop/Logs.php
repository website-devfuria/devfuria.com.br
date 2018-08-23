<?php

namespace oop;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

#
# Logs
#
class Logs {

    #
    #
    #
    function __construct($site) {
        $this->site = $site;
    }

    #
    # Cria um arquivo (vazio) de log conforme a data
    #
    function criar_arquivo() {
        $file = $this->site->path->logs . "/" . date("Y-m-d");

        if (!file_exists($file)) {
            $fp = fopen($file, "a");
            fclose($fp);
        }

        return $file;
    }

    #
    # Registra um log de página não encontrada
    #
    static function pagina_nao_encontrada($path_to_page) {
        $logs = new Logs($GLOBALS['site']);
        $file = $logs->criar_arquivo();

        $log = new Logger('devfuria');
        $log->pushHandler(new StreamHandler($file, Logger::DEBUG));
        $log->addError('404', array($path_to_page));
        return true;
    }

}
