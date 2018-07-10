<html lang="pt-br">
<head>
<link rel="icon" href="favicon.png"/>
<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
<title>Atelier Illuminati</title>
</head>

<body>
<?php
$nome        = $_POST['nome'];
$sobrenome   = $_POST['sobrenome'];
$endereco    = $_POST['endereco'];
$numero      = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro      = $_POST['bairro'];
$cidade      = $_POST['cidade'];
$estado      = $_POST['estado'];
$cep         = $_POST['cep'];
$telefone    = $_POST['telefone'];
$rg          = $_POST['rg'];
$cpf         = $_POST['cpf'];
$curso       = $_POST['curso'];
$checkbox    = $_POST['termos-aceito'];
$email       = $_POST['email'];
$login       = $_POST['login'];
$senha       = $_POST['senha'];

#
# Validar campos...
#
if (!$estado) {
    echo "<center><h1>Faltou o campo 'estado'!</h1></center>";
    exit();
}

require "Model.php";
echo "<center><h1>Sua inscrição foi realizada!</h1></center>";
?>

<?php

$MailToAddress = "contato@atelierilluminati.com.br"; 
$redirectURL   = "http://www.atelierilluminati.com.br/resposta.html"; 
$MailSubject   = "[Mensagem enviada pelo site]"; 

#
# Para você enviar email utilize a funçõa mail()
# http://php.net/manual/pt_BR/function.mail.php
#

?>

</body>
</html>