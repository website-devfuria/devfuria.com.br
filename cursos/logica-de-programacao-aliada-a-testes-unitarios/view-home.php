<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curso de Lógica de Programação Aliada a Testes Unitários</title>
    <meta name="author" content="Flávio Alexandre Micheletti">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="DevFuria" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="http://www.devfuria.com.br/cursos/logica-de-programacao-aliada-a-testes-unitarios-edicao-02-2018/" />
    <meta property="og:image" content="http://www.devfuria.com.br/assets/images/favicon.png"/>
    <link rel="shortcut icon" type="imagens/gif" href="/app/assets/clean/images/favicon.ico">
    <link rel="apple-touch-icon"                 href="/app/assets/clean/images/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="57x57"   href="/app/assets/clean/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72"   href="/app/assets/clean/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"   href="/app/assets/clean/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/app/assets/clean/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/app/assets/clean/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/app/assets/clean/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/app/assets/clean/images/apple-touch-icon-180x180.png">

    <!-- Frame Bootstrap -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" media="screen" href="/app/assets/clean/css/font-awesome.min.css" > -->
    <link rel="stylesheet" media="screen" href="/app/assets/clean/css/simple-line-icons.css" >

    <!-- Theme: Clean -->
    <link  rel="stylesheet" media="screen" href="/app/assets/clean/css/style.css" >

    <!-- Theme: DevFuria -->
    <link rel="stylesheet" media="screen" href="/app/assets/clean/css/devfuria.css" >

    <script src="/app/assets/clean/js/modernizr.custom.js"></script>

    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
        <!-- Preloader -->
        <div id="preloader"><div id="status"></div></div>

        <!-- Home start -->
        <section id="home" class="pfblock-image screen-height artigos">
            <div class="home-overlay"></div>
            <div class="intro">
                <h1>Curso de Lógica de Programação Aliada a Testes Unitários <br /><small></small></h1>
                <div class="start"></div>
                <p>Seja bem vindo(a) a sua plataforma EAD</p>

                <p>Flávio Alexandre Micheletti</p>
            </div>

            <!-- Button -->
            <a href="#conteudo"><div class="scroll-down"><span><i class="fa fa-angle-down fa-2x"></i></span></div></a>
        </section>
        <!-- Home end -->

        <article id="conteudo" class="container">
            <p>Olá, seja bem vindo ao curso de <strong>Lógica de Programação aliada a Testes Unitários</strong>!</p>
            <p>Esta é a nossa singela plataforma EAD.</p>
            <p>Estamos trabalhando duro para incluir novas funcionalidades.</p>
            <p>Se você tiver uma sugestão de melhoria, escreva nos comentários no rodapé.</p>

            <?php foreach($modulos as $modulo): ?>
                <br />
                <br />
                <br />
                <table class="table table-condensed">
                    <tr>
                        <th><?php echo $modulo['titulo'] ?></th><th></th><th></th>
                    </tr>
                    <?php foreach($modulo['videos'] as $video): ?>
                        <tr>
                            <td>
                                <a href="<?php echo $video->url ?>" target="_blanck" type="button" class="btn btn-default" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                                </a>

                                <?php echo ($video->novotitulo) ? $video->novotitulo : $video->titulo; ?>
                            </td>
                            <td class="text-center"><?php echo $video->duracao ?></td>
                            <td class="text-center"><label><input type="checkbox" name=""></label></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            <?php endforeach; ?>

            <br />
            <br />
            <br />

        </article>

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="social-links">
                            <li>
                                <a href="https://www.facebook.com/devfuria/" class="wow fadeInUp" target="_blank">
                                    <i class="fa fa-facebook">f</i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/devfuria" class="wow fadeInUp" data-wow-delay=".1s" target="_blank">
                                    <i class="fa fa-github-square">g</i>
                                </a>
                            </li>
                        </ul>
                        <p>
                            Este obra está licenciado sob a
                            <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">
                                Creative Commons Atribuição 4.0 Internacional
                            </a>.
                        </p>
                        <p>
                            <a href="/">www.devfuria.com.br</a> (desde 2012)
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/afeld/bootstrap-toc/v0.4.1/dist/bootstrap-toc.min.js"></script>
        <script src="/app/assets/devfuria.js"></script>
        <script src="/app/assets/highlight/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
        <script src="/app/assets/clean/js/jquery.sticky.js"></script>
        <script src="/app/assets/clean/js/smoothscroll.js"></script>
        <script src="/app/assets/clean/js/wow.min.js"></script>
        <script src="/app/assets/clean/js/jquery.easypiechart.js"></script>
        <script src="/app/assets/clean/js/waypoints.min.js"></script>
        <script src="/app/assets/clean/js/custom.js"></script>

    </body>
</html>