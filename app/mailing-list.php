<?php

/*

    Registra no banco de dados os emails

*/

#
# dep
#
require dirname(__FILE__) . '/boot.php';
require Site::$path['api/'] . '/boot.php';


#
#  get dados
#
$email        = (isset($_GET['email']))        ? $_GET['email'] :        'não-informado';
$utm_source   = (isset($_GET['utm_source']))   ? $_GET['utm_source'] :   'não-informado';
$utm_campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : 'não-informado';
$utm_medium   = (isset($_GET['utm_medium']))   ? $_GET['utm_medium'] :   'não-informado';
$quando       = date('Y-m-d H:i:s');




#
# dados teste
#
//$email        = "A1";
//$utm_source   = "A2";
//$utm_campaign = "A3";
//$utm_medium   = "A4";

#
# insert
#
fulia_mail_create($email, $utm_source, $utm_campaign, $utm_medium, $quando);




#
# notificação
#
$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email  . "\r\n" .
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
        <th>email</th><td>$email</td>
      </tr>
      <tr>
        <th>utm_source</th><td>$utm_source</td>
      </tr>
      <tr>
        <th>utm_campaign</th><td>$utm_campaign</td>
      </tr>
      <tr>
        <th>utm_medium</th><td>$utm_medium</td>
      </tr>
      <tr>
        <th>quando</th><td>$quando</td>
      </tr>
    </table>
  </body>
</html>
EOT;

# send
foreach (Site::$emails as $email) {
    mail($email, $subject, $message, $headers);
}

?>

<p>Thanks man ! <a href="javascript:window.history.go(-2)"> Go Back </a></p>