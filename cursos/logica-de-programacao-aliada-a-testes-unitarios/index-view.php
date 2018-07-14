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
                        <th style="width: 90%"><?php echo $modulo['titulo'] ?></th><th></th><th></th>
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

        <?php include(Site::$path['includes/'] . "footer.php") ?>
        <?php include(Site::$path['includes/'] . "footer-js.php") ?>
        <?php include(Site::$path['/'] . "/app/assets/clean/include-js.php") ?>

    </body>
</html>