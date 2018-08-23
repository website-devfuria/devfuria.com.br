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

    $site = $GLOBALS['site'];         // var_dump($site); //die();
    $uri  = "/" . $args['uri'];       // var_dump($uri); die();
    $page = oop\Page::getPage($uri);  // var_dump($page); die();

    # se não existir...
    if (!$page->exist()) {

        # ... tenta redirecionar
        $redirect = new oop\Redirect($uri);                    // var_dump($uri, $redirect->new_destination); die();
        $page = oop\Page::getPage($redirect->new_destination); // var_dump($page->exist()); die();

        # se nem tem redirecionamneto...
        if (!$page->exist()) {

            # ... erro 404
            $file = new oop\File('/', $site);
            $file->path->base = $site->path->base . "/404.md";
            $page = new oop\Page($file);

            oop\Logs::pagina_nao_encontrada($uri); // log

            $content_parsed = $this->view->fetchFromString($page->content);
            return $this->view->render($response, $site->getLayout($page->layout), [
                'site'     => $site,
                'page'     => $page,
                "content"  => $content_parsed
            ]);
        }

        # Redirecionamento...
        $target = $GLOBALS['site']->url->base . $redirect->new_destination;
        var_dump($target); die();
        // return $response->withRedirect($target, 301);

    }

    #
    # Carregar página
    #
    $content_parsed = $this->view->fetchFromString($page->content);
    // var_dump($content_parsed); die();

    return $this->view->render($response, $site->getLayout($page->layout), [
        'site' => $site,
        'page' => $page,
        "content"  => $content_parsed
    ]);

});





#
# start slim
#
$slim->run();
