<?php

use models\Contatos;


#
# Registra no banco de dados os contatos
#
$slim->get('/app/mailing-list/', function ($request, $response, $args) {

    $params = $request->getQueryParams();

    $utm = [];
    $utm_source   = (isset($params['utm_source']))   ? $params['utm_source']   : 'não-informado';
    $utm_campaign = (isset($params['utm_campaign'])) ? $params['utm_campaign'] : 'não-informado';
    $utm_medium   = (isset($params['utm_medium']))   ? $params['utm_medium']   : 'não-informado';

    $nome   = (isset($params['nome'])) ? $params['nome'] : '';
    $email  = (isset($params['email'])) ? $params['email'] : 'não-informado';
    $quando = date('Y-m-d H:i:s');

    // # dados de teste
    // $utm_source   = "a2";
    // $utm_campaign = "a3";
    // $utm_medium   = "a4";
    // $nome   = "a0";
    // $email  = "a1";
    // $quando = date('Y-m-d H:i:s');

    # api
    $site = $GLOBALS['site'];
    require $site->path->api . '/boot.php';

    # insert
    $resp = Contatos::registrar($nome, $email, $utm_source, $utm_campaign, $utm_medium, $quando);
    echo $resp;

});

