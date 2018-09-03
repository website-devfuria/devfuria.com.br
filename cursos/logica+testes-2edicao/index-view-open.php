<!DOCTYPE html>
<html>
  <head>

    <?php include(Site::$path['includes/'] . "head.php") ?>
    <?php include(Site::$path['includes/'] . "head-og.php") ?>
    <?php include(Site::$path['/'] . "/app/assets/clean/include-css.php") ?>

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
                <p>Experimente gratuitamente e</p>
                <p>tenha acesso ao conteúdo exclusivo !!!!</p>
                <p><a class="btn btn-primary" href="/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao.php?utm_source=devfuria.com.br&utm_campaign=logica-proximo-curso&utm_medium=index-do-ead" role="button">Efetuar matrícula</a></p>
                <p>Se você é aluno, <a class="" href="login/" role="button">clique aqui</a></p>
            </div>

            <!-- Button -->
            <a href="#conteudo"><div class="scroll-down"><span><i class="fa fa-angle-down fa-2x"></i></span></div></a>
        </section>
        <!-- Home end -->

        <article id="conteudo" class="container">

            <p>Escrever alguma coisa!</p>

            <?php foreach($modulos as $modulo): ?>
                <br />
                <br />
                <br />
                <table class="table table-condensed">
                    <tr>
                        <th style="width: 90%"><?php echo $modulo['titulo'] ?></th><th></th><th></th>
                    </tr>
                    <?php foreach($modulo['videos'] as $video): ?>
                        <tr class="<?php //echo $video->publico ? "active" : ""; ?>">
                            <td>
                                <?php if ($video->publico): ?>
                                    <a href="<?php echo $video->url ?>"
                                        target="_blanck" type="button" class="btn btn-default" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                                    </a>
                                <?php else: ?>
                                    <a href="/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao.php?utm_source=devfuria.com.br&utm_campaign=logica-proximo-curso&utm_medium=experimente"
                                        target="_blanck" type="button" class="btn btn-default" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                                    </a>
                                <?php endif ?>

                                <?php echo ($video->novotitulo) ? $video->novotitulo : $video->titulo; ?>
                                <?php if ($video->publico): ?>
                                    <span class="label label-success">Experimente</span>
                                <?php endif ?>
                            </td>
                            <td class="text-center"><?php echo $video->duracao ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>

            <?php endforeach; ?>

            <br />
            <br />
            <br />

        </article>

        <?php include(Site::$path['includes/'] . "footer.php") ?>
        <?php include(Site::$path['includes/'] . "footer-js.php") ?>
        <?php include(Site::$path['/'] . "/app/assets/clean/include-js.php") ?>

    </body>
</html>