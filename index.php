<?php

#
#
#
require dirname(__FILE__) . '/app/boot.php';



#
# /
#
$slim->get('/', function ($request, $response, $args) {
    // var_dump('/'); die();
    return $response->write('acessou index');
});

#
# /foo
#
$slim->get('/foo', function ($request, $response, $args) {
    // var_dump('/foo'); die();
    return $response->write('acessou /foo');
    // return $this->view->fetchFromString('');

});



#
# /{paginas}
#
$slim->get('[/{uri:.*}]', function ($request, $response, $args) {

    $site = $GLOBALS['site'];
    // var_dump($site); die();

    // $page = new Page('/python/index.md');
    $page = new Page('/python/sintaxe-basica/index.md');
    // var_dump($page); die();

    $page->uri_str = $args['uri'];
    $page->uri_arr = explode('/', $page->uri_str);
    // var_dump($page); die();

    $content_parsed = $this->view->fetchFromString($page->content, ['abc' => 123]);
    // var_dump($content_parsed); die();

    // return $this->view->render($response, 'layouts/artigo.html', ['site' => $site, 'page' => $page, "content"  => $content_parsed]);
    return $this->view->render($response, 'layouts/artigo+toc.html', ['site' => $site, 'page' => $page, "content"  => $content_parsed]);

    // return $response->write('páginas');
});

#
# start slim
#
$slim->run();
