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

    // $site = $GLOBALS['site'];
    // var_dump($site); //die();

    // $file = new oop\File($args['uri'], $site);
    // var_dump($this); // die();

    // $page = new \oop\Page($file);
    // var_dump($page); die();

    $page = oop\Page::getPage($args['uri']);
    // var_dump($page); die();

    if ($page->exist()) {
        $content_parsed = $this->view->fetchFromString($page->content, ['abc' => 123]);
        // var_dump($content_parsed); die();

        // $layout = 'layouts/artigo.html';
        $layout = 'layouts/artigo+toc.html';

        return $this->view->render($response, $layout, ['site' => $site, 'page' => $page, "content"  => $content_parsed]);

    } else {
        return $response->write('página não existe');
        // redirecionar($page->uri_str);
    }

});

#
# start slim
#
$slim->run();
