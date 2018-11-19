<?php

use models\Contatos;


#
#
#
$slim->get('/app/outras/', function ($request, $response, $args) {

    $params = $request->getQueryParams();

});

$slim->get('/logica-de-programacao/curso-de-logica.php', function ($request, $response, $args) {
    $destino = "/cursos/logica-de-programacao+testes-unitarios-em-python/2edicao";
    // var_dump($destino); die();
    return $response->withRedirect($destino, 301);
});

