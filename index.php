<?php


#
#
#
require dirname(__FILE__) . '/app/boot.php';


#
# /
#
Site::$slim->get('/', function ($request, $response, $args) {
    // var_dump(paginas(['index.md']));
    return $response->write('foi');
});


#
# /{paginas}
#
Site::$slim->get('[/{uri:.*}]', function ($request, $response, $args) {

    $md = file_get_contents('python/index.md');
    // var_dump($md); die();

    $parser = new \Mni\FrontYAML\Parser();
    // var_dump($parser); die();
    $document = $parser->parse($md);
    // var_dump($document); die();

    $front = $document->getYAML();
    // var_dump($front); die();

    $content = $document->getContent();
    // var_dump($content); //die();
    // echo $content;

    return $this->view->fetchFromString($content, ['abc' => 123]);
    // return $response->write('páginas');
});


#
# start slim
#
Site::$slim->run();


