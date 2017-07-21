<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

#
# timezone padrão
#
date_default_timezone_set("America/Sao_Paulo");

#
# App
#
class App {
    static $slim;
    static $path;
    static $IP;
}

App::$slim = new \Slim\Slim();

App::$path = array();
App::$path['/']     = dirname(__FILE__);
App::$path['logs/'] = dirname(__FILE__) . "/_site/logs/";

if (isset($_SERVER["REMOTE_ADDR"])) {
    App::$IP = $_SERVER["REMOTE_ADDR"];
} else {
    App::$IP = '0.0.0.0';
}

#
# criar um arquivo (vazio) de log conforme a data
#
function criar_arquivo_log($pasta) {
    $nome_arquivo = date("Y-m-d");
    $file         = $pasta . "/$nome_arquivo";
    if (!file_exists($file)) {
        $fp = fopen($file, "a");
        fclose($fp);
    }
    return $nome_arquivo;
}

#
# registra um log de página não encontrada
#
function log_pagina_nao_encontrada($path_to_page) {
    $file = criar_arquivo_log(App::$path['logs/']);
    $log = new Logger(App::$IP);
    $log->pushHandler(new StreamHandler(App::$path['logs/'] . $file, Logger::DEBUG));
    $log->addError('404', array($path_to_page));
    return App::$path['logs/'] . $file;
}
