<?php


$curso_url = "logica-de-programacao+testes-unitarios-em-python";
$curso_tit = "Curso Lógica de Programação + Testes de Unidades em Python";
$curso_tit_curto = "Lógica + Testes em Python";


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
# LP1 sobre curso -> checkout
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios/lp1', function ($request, $response, $args) {
    // $site = $GLOBALS['site'];
    // var_dump($site->url->base);
    // echo "<a href='{$site->url->base}/cursos/logica-de-programacao-aliada-a-testes-unitarios/checkout'>checkout</a>";

    $page = oop\Page::getPage('/cursos/logica+testes-2lp1/');
    // var_dump($page->file); die();
    // $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();
    $page->layout = "/layouts/cursos-log2-lp1.html";

    return $this->view->render($response, $page->layout, [
        'site'    => $GLOBALS['site'],
        'page'    => $page,
        'content' => $content_parsed
    ]);



});

#
# LP2 sobre curso + captura de email
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios/lp2', function ($request, $response, $args) {

    $params = $request->getQueryParams();

    $utm = [];
    $utm['source']   = (isset($params['utm_source']))   ? $params['utm_source'] :   'não-informado';
    $utm['campaign'] = (isset($params['utm_campaign'])) ? $params['utm_campaign'] : 'não-informado';
    $utm['medium']   = (isset($params['utm_medium']))   ? $params['utm_medium'] :   'não-informado';

    $site = $GLOBALS['site'];
    // var_dump($site->url->mailinglist); die();

    $page = oop\Page::getPage('/cursos/logica+testes-2lp2/');
    // var_dump($page->file); die();
    // $layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();

    // $page->tittle = "Curso Lógica de Programação + Testes de Unidades";
    $page->layout = "layouts/cursos-log2-lp2.html";
    return $this->view->render($response, $page->layout, [
        'site'    => $GLOBALS['site'],
        'page'    => $page,
        'utm'     => $utm,
        'content' => $content_parsed
    ]);

});

#
# redirecionamento
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/', function ($request, $response, $args) {
    $site = $GLOBALS['site'];
    $curso_url = $GLOBALS['curso_url'];
    $curso_tit = $GLOBALS['curso_url'];

    $query = $request->getUri()->getQuery();
    $destino = $site->url->base . "/cursos/$curso_url/lp3/?" . $query;
    // var_dump($query, $destino); die();

    return $response->withRedirect($destino, 301);

});


#
#
#
$slim->get("/cursos/$curso_url/lp3/", function ($request, $response, $args) {
    var_dump('bateu'); die();

    $params = $request->getQueryParams();

    $utm = [];
    $utm['source']   = (isset($params['utm_source']))   ? $params['utm_source'] :   'não-informado';
    $utm['campaign'] = (isset($params['utm_campaign'])) ? $params['utm_campaign'] : 'não-informado';
    $utm['medium']   = (isset($params['utm_medium']))   ? $params['utm_medium'] :   'não-informado';

    $site = $GLOBALS['site'];
    // var_dump($site->url->mailinglist); die();

    $page = oop\Page::getPage("/");
    $page->tittle = "Curso Lógica de Programação + Testes de Unidades";
    $page->layout = "layouts/cursos-log2-next-open.html";
    return $this->view->render($response, $page->layout, [
        'site'    => $GLOBALS['site'],
        'page'    => $page,
        'utm'     => $utm,
    ]);

});


#
# Comprar
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios/checkout', function ($request, $response, $args) {
    # api
    $site = $GLOBALS['site'];
    require $site->path->pagseg . '/boot.php';

    InicializarPagSeguro($ambiente, $conta, $token, $logs, $path_log);
    $url_pagto = getUrlChekout();
    echo "<a href='$url_pagto'>ir para checkout pagseguro</a>";
    return $response->withRedirect($url_pagto);

});


#
# teste manual pagseguro (session code)
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios/checkout/session-code', function ($request, $response, $args) {
    # api
    $site = $GLOBALS['site'];
    require $site->path->pagseg . '/boot.php';

    InicializarPagSeguro($ambiente, $conta, $token, $logs, $path_log);
    $sessionCode = getSessionCode();
    var_dump($sessionCode);
});

#
# teste manual pagseguro (url)
#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios/checkout/url', function ($request, $response, $args) {
    # api
    $site = $GLOBALS['site'];
    require $site->path->pagseg . '/boot.php';

    InicializarPagSeguro($ambiente, $conta, $token, $logs, $path_log);
    $url_pagto = getUrlChekout();;
    var_dump($url_pagto);
    echo "<a href='$url_pagto'>ir para checkout pagseguro</a>";
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

    return $this->view->render($response, $page->layout, [
        'site'    => $GLOBALS['site'],
        'page'    => $page,
        "content" => $content_parsed
    ]);

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


#
# redirecionamentos:
#

#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao.php', function ($request, $response, $args) {
    $site = $GLOBALS['site'];
    $query = $request->getUri()->getQuery();
    $destino = $site->url->base . "/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/?" . $query;
    // var_dump($query, $destino); die();

    return $response->withRedirect($destino, 301);
});

#
$slim->get('/logica-de-programacao/curso-de-logica.php', function ($request, $response, $args) {

    $site = $GLOBALS['site'];
    $query = $request->getUri()->getQuery();
    $destino = $site->url->base . "/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/?" . $query;
    // var_dump($query, $destino); die();

    return $response->withRedirect($destino, 301);
});

#
// $slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao/', function ($request, $response, $args) {
//     $site = $GLOBALS['site'];
//     $query = $request->getUri()->getQuery();
//     $destino = $site->url->base . "/cursos/logica-de-programacao+testes-unitarios-python/?" . $query;
//     // var_dump($query, $destino); die();

//     return $response->withRedirect($destino, 301);
// });

#
$slim->get('/cursos/logica-de-programacao-aliada-a-testes-unitarios/[{uri:.*}/]', function ($request, $response, $args) {
    var_dump($args);
    $query = $request->getUri()->getQuery();
    var_dump($query);
//logica-de-programacao+testes-unitarios-python
});

