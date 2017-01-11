<?php

#
# Forçar mostrar erros
#
ini_set('display_errors', 'on');
ini_set('track_errors', 'on');
ini_set('html_errors', 'on');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);

require dirname(__FILE__) . '/vendor/autoload.php';
require dirname(__FILE__) . '/app.php';
require dirname(__FILE__) . '/redirecionametos.php';

App::$slim->get('/', 'index');
App::$slim->get('(:uri+)', 'paginas');
App::$slim->run();

function index() {
    require "index.html";
}

function paginas($arr_uri) {
    # $arr_uri é um array eu descarto, ou seja, não utilizo.
    unset($arr_uri);

    # getResourceUri() traz, no formato string, a parte após o domínio.
    $str_uri = App::$slim->request->getResourceUri();

    $pagina = App::$path['/'] . $str_uri . "index.html";
    if (file_exists($pagina)) {
        // echo $pagina;
        require $pagina;
    } else {
        App::$slim->response->setStatus(404);
        require App::$path['/'] . "/404.html";
        log_pagina_nao_encontrada($str_uri);
    }
}
