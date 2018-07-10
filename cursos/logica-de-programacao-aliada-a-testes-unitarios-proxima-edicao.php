<?php

require "../app/boot.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Curso Lógica de Programação + Testes de Unidades</title>
        <meta name="description" content="Curso Lógica de programação + Testes de Unidades" />
        <meta name="og:description" content="Curso Lógica de programação + Testes de Unidades" />
        <meta name="author" content="Flávio Alexandre Micheletti">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Curso Lógica de programação + Testes de Unidades"/>
        <meta property="og:url" content="http://www.devfuria.com.br/foo/" />
        <meta property="og:image" content="http://www.devfuria.com.br/assets/images/favicon.png"/>
        <link rel="canonical" href="http://www.devfuria.com.br/foo/">
        <link rel="shortcut icon" type="images/gif" href="/assets/images/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
        <style type="text/css">
            body {
                font-family: 'Source Code Pro', monospace;
                height: 80vh;
                display: flex;
                flex-flow: column;
                align-items: center;
                text-align: center;
                justify-content: center;
            }
            h1 {
                margin: 0;
                padding: 0;
            }
            h2 {
                padding: 0;
                font-size: .8em;
                color: #767676;
            }
        </style>
    </head>
    <body>
        <h2>Powered by devfuria.com.br</h2>
        <h1>Curso de Lógica de Programação <br /> + <br />Testes de Unidades</h1>

        <p>Aberta as inscrições para a próxima turma!!!</p>

        <p>As vagas são disputadas e é por tempo limitado.</p>

        <p><strong>Se inscreva agora</strong> e garanta a sua vaga!</p>

        <!-- <p>Cadastre seu email e descubra mais detalhes sobre este curso!</p> -->
        <!-- <p><a class="btn btn-primary" href="https://goo.gl/forms/LCWvmFIUr747EXai2" role="button">Cadastre-se aqui!!!</a></p> -->

<?php

#
# Recebendo alguns dados
#
$utm_source   = (isset($_GET['utm_source']))   ? $_GET['utm_source'] :   'não-informado';
$utm_campaign = (isset($_GET['utm_campaign'])) ? $_GET['utm_campaign'] : 'não-informado';
$utm_medium   = (isset($_GET['utm_medium']))   ? $_GET['utm_medium'] :   'não-informado';

?>

        <form action="<?php echo Site::$url['mailing-list/'] ?>">
            <input type="hidden" value="<?php echo $utm_source; ?>" name="utm_source"/>
            <input type="hidden" value="<?php echo $utm_campaign; ?>" name="utm_campaign"/>
            <input type="hidden" value="<?php echo $utm_medium; ?>" name="utm_medium"/>
            <label><input type="text" value="" name="email" placeholder="seu melhor email" style="width: 250px" /></label>
            <label><button type="submit">Inscreva-se</button></label>
        </form>

    </body>
    <?php include(Site::$path['includes/'] . "footer-analytics.php") ?>
</html>