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
# próxima edição ???
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios/', function ($request, $response, $args) {
    var_dump('asd'); die();
});

#
# redirecionamento
#
$slim->get('/logica-de-programacao/curso-de-logica.php', function ($request, $response, $args) {

    $site = $GLOBALS['site'];
    $query = $request->getUri()->getQuery();
    $destino = $site->url->base . "/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/?" . $query;
    // var_dump($query, $destino); die();

    return $response->withRedirect($destino, 301);
});


#
# próxima edição
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/', function ($request, $response, $args) {

    $params = $request->getQueryParams();

    $utm = [];
    $utm['source']   = (isset($params['utm_source']))   ? $params['utm_source'] :   'não-informado';
    $utm['campaign'] = (isset($params['utm_campaign'])) ? $params['utm_campaign'] : 'não-informado';
    $utm['medium']   = (isset($params['utm_medium']))   ? $params['utm_medium'] :   'não-informado';

    $site = $GLOBALS['site'];
    // var_dump($site->url->mailinglist); die();

    $page = oop\Page::getPage("/");
    $page->tittle = "Curso Lógica de Programação + Testes de Unidades";
    $page->layout = "layouts/cursos-next-open.html";
    return $this->view->render($response, $page->layout, [
        'site'    => $GLOBALS['site'],
        'page'    => $page,
        'utm'     => $utm,
    ]);

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
# 2 edição (degustação)
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-2edicao/', function ($request, $response, $args) {

    $site = $GLOBALS['site'];
    require $site->path->api . '/boot.php';

    $page = oop\Page::getPage('/cursos/logica+testes-2degustacao/');
    $content_parsed = $this->view->fetchFromString($page->content);

    $log2 = R::dispense("logica2");
    $modulos = $log2->list_view([]);

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
        // var_dump($target); die();
        return $response->withRedirect($target, 301);
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
    $log2 = R::dispense("logica2");
    $modulos = $log2->list_view($aluno->aulas);
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
        $arr = AulasAssistidas::adicionar($args['aula'], $arr_aulas);
    } elseif ($action == 'off') {
        $arr = AulasAssistidas::remover($args['aula'], $arr_aulas);
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
    AulasAssistidas::update($args['aluno'], $args['curso'], $assistidas);
});
