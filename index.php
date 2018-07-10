<?php

#
#
#
require dirname(__FILE__) . '/app/boot.php';

#
# router /
#
Site::$slim->get('/', 'index');

#
# router /{paginas}
#
Site::$slim->get('(:uri+)', 'paginas');

#
# start slim
#
Site::$slim->run();

#
# Esta é a home
#
function index() {
     paginas(['index.md']);
    // require "index.html";
}

#
# Aqui ele tenta carregar as páginas conforme a url
#
function paginas($pagina_arr) {

    $page = $GLOBALS['page'];                                        # página

    $page->uri_arr = $pagina_arr;                                    # traz a parte após o domínio, no formato array.
    $page->uri_str = Site::$slim->request->getResourceUri();         # traz a parte após o domínio, no formato string.
    $page->url_str = Site::$dominio . $page->uri_str;
    $page->path_md = Site::$path['/'] . $page->uri_str . "index.md"; # arquivo md

    // var_dump($page); die();

    if (file_exists($page->path_md)) {
        carregar($page);
    } else {
        redirecionar($page->uri_str);
    }
}

