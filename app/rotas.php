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

    $email  = (isset($params['email'])) ? $params['email'] : 'não-informado';
    $quando = date('Y-m-d H:i:s');

    // # dados de teste
    // $utm_source   = "a2";
    // $utm_campaign = "a3";
    // $utm_medium   = "a4";
    // $email  = "a1";
    // $quando = date('Y-m-d H:i:s');

    # api
    $site = $GLOBALS['site'];
    require $site->path->api . '/boot.php';

    # insert
    $inscrito = Contatos::registrar($email, $utm_source, $utm_campaign, $utm_medium, $quando);
    exibir_uma_mensagem_legal();
    tomar_ciencia_da_inscricao_do_seguinte($inscrito);

});

#
#
#
function exibir_uma_mensagem_legal() {
    // echo "mensagem legal";
    echo '<p>Thanks man! <a href="javascript:window.history.go(-2)"> Go Back </a></p>';
}

#
# aux - enviar notificação de inscrição
#
function tomar_ciencia_da_inscricao_do_seguinte($inscrito) {
    # notificação
    $headers = "From: " . $inscrito->email . "\r\n" .
               "Reply-To: " . $inscrito->email  . "\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-Type: text/html; charset=UTF-8\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $subject = '+ 1 inscrito';
    $message = <<<EOT
    <html>
        <head>
        <title>HTML email</title>
        </head>
      <body>
        <table>
          <tr>
            <th>email</th><td>$inscrito->email</td>
          </tr>
          <tr>
            <th>utm_source</th><td>$inscrito->utm_source</td>
          </tr>
          <tr>
            <th>utm_campaign</th><td>$inscrito->utm_campaign</td>
          </tr>
          <tr>
            <th>utm_medium</th><td>$inscrito->utm_medium</td>
          </tr>
          <tr>
            <th>quando</th><td>$inscrito->quando</td>
          </tr>
        </table>
      </body>
    </html>
EOT;

    $site = $GLOBALS['site'];

    # send
    foreach ($site->emails as $email) {
        mail($email, $subject, $message, $headers);
    }

}