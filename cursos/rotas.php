<?php

#
# /cursos
#
$slim->get('/cursos/', function ($request, $response, $args) {

    $site = $GLOBALS['site'];
    $page = oop\Page::getPage('/cursos/');
    $content_parsed = $this->view->fetchFromString($page->content);

    return $this->view->render($response, $site->getLayout($page->layout), ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);

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
#
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-2edicao/', function ($request, $response, $args) {

    $site = $GLOBALS['site'];
    require $site->path->api . '/boot.php';

    $page = oop\Page::getPage('/cursos/logica+testes-2degustacao/');
    $content_parsed = $this->view->fetchFromString($page->content);
    $modulos = fulia_log2_videos_view([]);

    return $this->view->render($response, $site->getLayout($page->layout), [
        "site"    => $GLOBALS['site'],
        "page"    => $page,
        "content" => $content_parsed,
        "modulos" => $modulos
    ]);

});

#
# 2 edição
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-2edicao/{hash}', function ($request, $response, $args) {
    $site = $GLOBALS['site'];
    require $site->path->api . '/boot.php';

    $aluno = oop\Autenticador::get_aluno_by_hash($args['hash']);
    // var_dump($aluno); die();
    if(!$aluno) {
        $target = $site->url->base . "/cursos/logica-de-programacao-aliada-a-testes-unitarios-2edicao/";
        $target = $site->url->base . "/foo";
        var_dump($target); die();
        return $response->withRedirect($target, 200);
    }

    $aluno->aulas = $aluno->aulas_assistidas($aluno->cursos_id);
    // var_dump($aluno->export()); die();
    // var_dump($aluno->aulas); die();

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
    // die();

    return $this->view->render($response, $site->getLayout($page->layout), [
        "site"    => $GLOBALS['site'],
        "page"    => $page,
        "content" => $content_parsed,
        "modulos" => $modulos,
        "aluno"   => $aluno
    ]);
});

#
# anotar aula assistida
#
$slim->get('/cursos/aulas-assistidas/{aluno}/{curso}/{aula}/{action}', function ($request, $response, $args) {
    // var_dump($args); die();
    // var_dump($GLOBALS['site']->path->api . '/boot.php'); die();
    require $GLOBALS['site']->path->api . '/boot.php';

    #
    # carregar as aulas
    #
    $aluno = R::load('alunos', $args['aluno']);
    $arr_aulas = $aluno->aulas_assistidas($aluno->cursos_id);
    // var_dump($arr_aulas);

    #
    # remover ou adicionar
    #
    $arr = [];
    if ($args['action'] == 'on') {
        $arr = aulas_assistidas_adicionar($args['aula'], $arr_aulas);
    } elseif ($action == 'off') {
        echo "b";
        $arr = aulas_assistidas_remover($args['aula'], $arr_aulas);
    } else {
        echo "não faz nada, certo ?";
    }

    # se tiver pelo menos uma...
    if (count($arr)) {
        sort($arr);
        $assistidas = implode(" ", $arr);
    } else {
        $assistidas = null;
    }

    // var_dump($assistidas);

    #
    # update
    #
    aulas_assistidas_update($args['aluno'], $args['curso'], $assistidas);
});
