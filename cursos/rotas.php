<?php

#
# /cursos
#
$slim->get('/cursos/', function ($request, $response, $args) {

    $page = oop\Page::getPage('/cursos/');
    // var_dump($page->file); die();
    // $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();
    $page->layout = "/layouts/basico1.html";

    return $this->view->render($response, $page->layout, ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);

});

#
# próxima edição
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/', function ($request, $response, $args) {

    $page = oop\Page::getPage('/cursos/logica+testes-proxima-edicao/');
    var_dump($page->file); die();
    // $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();
    $page->layout = "/layouts/cursos-log-next.html";

    // return $this->view->render($response, $page->layout, ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);

});

#
# 1 edição
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-1edicao/', function ($request, $response, $args) {

    $page = oop\Page::getPage('/cursos/logica+testes-1edicao/');
    // var_dump($page->file); die();
    // $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();
    $page->layout = "/layouts/cursos-log1.html";

    return $this->view->render($response, $page->layout, ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);

});

#
# 2 edição
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-2edicao/', function ($request, $response, $args) {

    $site = $GLOBALS['site'];
    // var_dump($site->path->api); die();
    require $site->path->api . '/boot.php';


    $page = oop\Page::getPage('/cursos/logica+testes-2edicao/');
    // var_dump($page->file); die();
    // var_dump($page); die();
    // $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();

    // var_dump($site->getLayout($page->layout)); die();

    #
    # módulos do curso
    #
    $modulos = fulia_logica_2edicao();
    // var_dump($modulos[12]);
    // var_dump($modulos); die();

    return $this->view->render($response, $site->getLayout($page->layout), [
        "site"    => $GLOBALS['site'],
        "page"    => $page,
        "content" => $content_parsed,
        "modulos" => $modulos
      ]);
});
