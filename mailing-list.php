<?php

#
#  Inserindo
#

//# dados teste
//$email        = "A1";
//$utm_source   = "A2";
//$utm_campaign = "A3";
//$utm_medium   = "A4";

# dados
$email        = (isset($_GET['email']))        ? $_GET['email'] :        'não-informado';
$utm_source   = (isset($_GET['utm_source']))   ? $_GET['utm_source'] :   'não-informado';
$utm_campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : 'não-informado';
$utm_medium   = (isset($_GET['utm_medium']))   ? $_GET['utm_medium'] :   'não-informado';
date_default_timezone_set("America/Sao_Paulo");
$quando       = date('Y-m-d H:i:s');

# conexão
// conexaod_dev, conexaod_dev, alfa9876
$db = new PDO('mysql:host=localhost;dbname=conexaod_dev', "conexaod_dev", "alfa9876");
//$db = new PDO('mysql:host=localhost;dbname=db', "user", "pass");
$db->exec("set names utf8");


# insert
$sql = $db->prepare("INSERT INTO fuliaMail (email, utm_source, utm_campaign, utm_medium, quando) VALUES (?, ?, ?, ?, ?)");
$sql->bindParam(1, $email);
$sql->bindParam(2, $utm_source);
$sql->bindParam(3, $utm_campaign);
$sql->bindParam(4, $utm_medium);
$sql->bindParam(5, $quando);
$sql->execute();


# notificação
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

$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email  . "\r\n" .
           "MIME-Version: 1.0\r\n" .
           "Content-Type: text/html; charset=UTF-8\r\n" .
           "X-Mailer: PHP/" . phpversion();
mail('sitedevfuria@gmail.com', $subject, $message, $headers);
mail('flavio@domdiagnosticos.com.br', $subject, $message, $headers);

/*
 * UMT code
 *
 * utm_source   = Site que está promovendo tráfego.
 * utm_campaign = Nome da campanha para identificar a promoção de um produto específico.
 * utm_medium   = É a forma como o tráfego chega, tais como o pay-per-click (PPC), e-mail, banners ou redes sociais.
 * utm_content  = É uma variável opcional e usada para diferenciar seções e conseguir ter mais profundidade de informação.
 *                Por exemplo, é útil para diferenciar os links de texto, links no logotipo ou de uma imagem.
 * utm_term     = Trata-se de uma variável facultativa e é usada para identificar palavras-chave de um anúncio.
 *
 *
 * Exemplos:
 *     utm_campaign  = logica_jan2018
 *     utm_source    = yotube, facebook, devfuria,
 *     utm_medium    = descricao, post_tal, artigo_tal
 */


/*
 *  SQL conexaod_dev.fuliaMail
 *
CREATE TABLE `fuliaMail` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `utm_source` varchar(100) NOT NULL,
  `utm_campaign` varchar(100) NOT NULL,
  `utm_medium` varchar(100) DEFAULT NULL,
  `utm_content` varchar(100) DEFAULT NULL,
  `utm_term` varchar(100) DEFAULT NULL,
  `quando` date NOT NULL,
  `livre1` varchar(100) DEFAULT NULL,
  `livre2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `fuliaMail` ADD PRIMARY KEY (`id`,`email`);
ALTER TABLE `fuliaMail` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `fuliaMail` CHANGE `quando` `quando` DATETIME NOT NULL;

*/
?>

<p>Thanks man ! <a href="javascript:window.history.go(-2)"> Go Back </a></p>