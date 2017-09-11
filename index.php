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

App::$slim->get('/', 'index');
App::$slim->get('(:uri+)', 'paginas');
App::$slim->run();

function index() {
    require "index.html";
}

function paginas($arr_uri) {
    # $arr_uri é um array que eu descarto, ou seja, não utilizo.
    unset($arr_uri);

    # getResourceUri() traz, no formato string, a parte após o domínio.
    $str_uri = App::$slim->request->getResourceUri();

    $pagina = App::$path['/'] . $str_uri . "index.html";
    if (file_exists($pagina)) {
        // echo $pagina;
        require $pagina;
    } else {

        # se não existir, tento um redirecionamento...
        redirecionar_perdidos($str_uri);
        redirecionar_php_nivel_zero($str_uri);
        redirecionar_logica_basico($str_uri);
        redirecionar_linux_cookbook($str_uri);
        redirecionar_javascript_refs($str_uri);
        redirecionar_outros($str_uri);

        # se nem o redirecionamento deu certo, então só nos resta isso..
        App::$slim->response->setStatus(404);
        require App::$path['/'] . "/404.html";
        //log_pagina_nao_encontrada($str_uri);
    }
}

#
function redirecionar_perdidos($uri) {
    if (strpos($uri, 'furia')) {
        App::$slim->redirect('/', 301);
    }
    if (strpos($uri, 'old')) {
        App::$slim->redirect('/', 301);
    }
}

#
function redirecionar_php_nivel_zero($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'php' && $arr_uri[2] == 'nivel-zero') {
        $nova_url = "/" . $arr_uri[1] . "/";
        //var_dump($nova_url); die();
        App::$slim->redirect($nova_url, 301);
    }
}
#
function redirecionar_logica_basico($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'logica-de-programacao' && $arr_uri[2] == 'basico') {
        $nova_url = "/" . $arr_uri[1] . "/";
        //var_dump($nova_url); die();
        App::$slim->redirect($nova_url, 301);
    }
}

#
function redirecionar_linux_cookbook($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'linux' && $arr_uri[2] == 'cookbook') {
        $nova_url = "/" . $arr_uri[1] . "/instalando-" . $arr_uri[3] . "/";
        //var_dump($nova_url); die();
        App::$slim->redirect($nova_url, 301);
    }
}

#
function redirecionar_javascript_refs($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'javascript' && $arr_uri[2] == 'refs') {
        $nova_url = "/" . $arr_uri[1] . "/". $arr_uri[3] . "/";
        //var_dump($nova_url); die();
        App::$slim->redirect($nova_url, 301);
    }
}

#
function redirecionar_outros($uri) {
    $map = require dirname(__FILE__) . '/redirecionametos.php';

    # a uri solicitada está mapeada ?
    if (array_key_exists($uri, $map)) {
        $nova_url = $map[$uri];
        //var_dump($nova_url); die();
        App::$slim->redirect($nova_url, 301);
    }

}


