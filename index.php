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
    $page->layout = 'layouts/home.html';
    $content_parsed = $this->view->fetchFromString($page->content);
    return $this->view->render($response, $page->layout, ['site' => $GLOBALS['site'], 'page' => $page, "content"  => $content_parsed]);
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
# outras rotas
#
require("app/rotas.php");


#
# /{paginas}
#
$slim->get('[/{uri:.*}]', function ($request, $response, $args) {
    // var_dump($args); die();

    $site = $GLOBALS['site'];         // var_dump($site); //die();
    $uri  = "/" . $args['uri'];       // var_dump($uri); die();
    $page = oop\Page::getPage($uri);  // var_dump($page); die();
    // var_dump($site); die();

    #
    # se não existir...
    #
    if (!$page->exist()) {
        #
        # tenta redirecionar
        #
        $redirect = new oop\Redirect($uri);
        if ($redirect->new_destination) {    # se tem redirecionamneto...
            $page = oop\Page::getPage($redirect->new_destination);
            $target = $site->url->base . $redirect->new_destination;
            // var_dump($target); die();
            return $response->withRedirect($target, 301);
        } else {
            #
            # erro 404
            #
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
    }

    #
    # Abrir página
    #
    // var_dump($site->path->base);
    // var_dump($page->isSection());
    // var_dump($page->secao);
    // var_dump($page->capitulo);
    // die()

    $secao = new oop\Section();
    $page->menus = $secao->getMenus($site->path->base, $page->secao);

    if (isset($page->capitulo)) {
        $page->menu = $secao->getMenu($page->capitulo);
        $page->setPrevAndNext();
    }
    // var_dump($page->menu);
    // var_dump($page->content);
    // die();

    #
    # Carregar página
    #
    $content_parsed = $this->view->fetchFromString($page->content, ["page" => $page]);
    // var_dump($content_parsed); die();

    return $this->view->render($response, $site->getLayout($page->layout), [
        "site" => $site,
        "page" => $page,
        "content"  => $content_parsed
    ]);

});

#
# start slim
#
$slim->run();
