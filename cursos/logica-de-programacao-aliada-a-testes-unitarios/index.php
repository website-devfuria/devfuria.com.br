<?php

require "../../app/boot.php";
require Site::$path['api/'] . '/boot.php';


#
#
#
$modulos = fulia_log2();

$page = $GLOBALS['page'];                                        # página

// $page->uri_arr = $pagina_arr;                                    # traz a parte após o domínio, no formato array.
// $page->uri_str = Site::$slim->request->getResourceUri();         # traz a parte após o domínio, no formato string.
$page->uri_str = "";
$page->url_str = Site::$dominio . $page->uri_str;
$page->front = [];
$page->front['title'] = "Curso de Lógica de Programação Aliada a Testes Unitários";


#
# view
#
require "view-home.php";
