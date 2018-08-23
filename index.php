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
    // return $response->write('acessou index');

    // $site = $GLOBALS['site'];
    // var_dump($site); //die();

    $page = oop\Page::getPage('/');
    // var_dump($page->file); die();
    $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    return $this->view->render($response, $layout, ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);
});

#
# /foo
#
$slim->get('/foo', function ($request, $response, $args) {
    // var_dump('/foo'); die();
    // return $response->write('acessou /foo');
    // return $this->view->fetchFromString('');

    // $site = $GLOBALS['site'];
    // var_dump($site); //die();

    $page = oop\Page::getPage('/php/o-que-e-php/');
    // var_dump($page->file); die();
    $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    return $this->view->render($response, $layout, ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);
});

#
# /{paginas}
#
$slim->get('[/{uri:.*}]', function ($request, $response, $args) {

    // $site = $GLOBALS['site'];
    // var_dump($site); //die();

    // $file = new oop\File($args['uri'], $site);
    // var_dump($this); // die();

    // $page = new \oop\Page($file);
    // var_dump($page->file); die();

    $uri = "/" . $args['uri'];
    // var_dump($uri); die();

    $page = oop\Page::getPage($uri);
    // var_dump($page); die();

    if ($page->exist()) {
        // $layout = 'layouts/basico1.html';
        // $layout = 'layouts/basico2.html';
        // $layout = 'layouts/basico3.html';
        // $layout = 'layouts/basico4.html';
        // $layout = 'layouts/cursos.html';
        // $layout = 'layouts/artigo+toc.html';
        // $layout = 'layouts/artigo.html';
        // $layout = 'layouts/home.html';
        // $layout = 'layouts/html-01.html';
        // $layout = 'layouts/nulo.html';
        // $layout = 'layouts/secao+toc.html';
        // $layout = 'layouts/secao.html';

        $content_parsed = $this->view->fetchFromString($page->content, ['abc' => 123]);
        // var_dump($content_parsed); die();

        return $this->view->render($response, $layout, ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);

    } else {

        $redirect = new oop\Redirect($uri);
        // var_dump($uri, $redirect->new_destination); die();

        $page = oop\Page::getPage($redirect->new_destination);
        // var_dump($page->exist()); die();

        if ($page->exist()) {
            $target = $GLOBALS['site']->url->base . $redirect->new_destination;
            var_dump($target); die();
            // return $response->withRedirect($target, 301);

        } else {
            # se nenhum redirecionamento deu certo,
            # então só nos resta isso..
            // Site::$slim->response->setStatus(404);
            // require Site::$path['/'] . "/404.html";
            // log_pagina_nao_encontrada($str_uri);

            // return $response->write('página não existe');
            // redirecionar($page->uri_str);

        }

    }

    var_dump("algum problema: $uri"); die();

});





#
# start slim
#
$slim->run();
