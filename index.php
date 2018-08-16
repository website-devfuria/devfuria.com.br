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

    $md = file_get_contents('python/index.md');
     // var_dump($md); die();

    $parser   = new \Mni\FrontYAML\Parser();
    // var_dump($parser); die();

    $document = $parser->parse($md);
    // var_dump($document); die();

    $front    = $document->getYAML();
    // var_dump($front); die();

    $content  = $document->getContent();
    // var_dump($content); die();
    // echo $content;

    $content_parsed = $this->view->fetchFromString($content, ['abc' => 123]);
    // var_dump($content_parsed); die();

// var_dump('1',$_SESSION);


    return $this->view->render($response, 'artigo.html', ["content"  => $content_parsed ]);


    // return $response->write('páginas');
});


#
# start slim
#
$slim->run();
