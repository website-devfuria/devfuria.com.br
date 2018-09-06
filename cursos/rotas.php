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
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-2edicao/{hash}', function ($request, $response, $args) {
    # token
    // if (isset($_GET['t'])) {
        $aluno = oop\Autenticador::get_aluno_by_hash($args['hash']);

        if($aluno) {
            $aluno->aulas = $aluno->aulas_assistidas($aluno->cursos_id);
            // var_dump($aluno->export()); die();
            // var_dump($aluno->aulas); die();
        }

    // }

    $site = $GLOBALS['site'];

    # crio a sessão (visível em api)
    $_SESSION['aluno'] = ($aluno) ? $aluno->export() : null;
    // var_dump($_SESSION); die();

    $page = oop\Page::getPage('/cursos/logica+testes-2edicao/');
    // var_dump($page->file); die();
    // var_dump($page); die();
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();
    // var_dump($site->getLayout($page->layout)); die();

    # módulos do curso
    $modulos = fulia_log2_videos_view($aluno->aulas);
    // var_dump($modulos[1]);
    // var_dump($modulos);
    //die();

    return $this->view->render($response, $site->getLayout($page->layout), [
        "site"    => $GLOBALS['site'],
        "page"    => $page,
        "content" => $content_parsed,
        "modulos" => $modulos,
        "aluno"   => $aluno
    ]);

});
