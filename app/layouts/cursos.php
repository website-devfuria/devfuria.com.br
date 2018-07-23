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
                <h1><?php echo $page->front['title'] ?> <br /><small><?php echo $page->front['description'] ?></small></h1>
                <div class="start"></div>
                <p><small>Primeira Edição (Fevereiro/2018)</small></p>

                <p>Se inscreva para a próxima turma e não perca nenhuma novidade !!!!</p>
                <p><a class="btn btn-primary" href="/cursos/logica-de-programacao-aliada-a-testes-unitarios-proxima-edicao.php?utm_source=devfuria.com.br&utm_campaign=matriculas&utm_medium=home-page" role="button">Próxima Turma!!!</a></p>

                <!-- <p>Cadastre seu email e descubra mais detalhes sobre este curso!</p> -->
                <!-- <p><a class="btn btn-primary" href="https://goo.gl/forms/LCWvmFIUr747EXai2" role="button">Cadastre-se aqui!!!</a></p> -->
            </div>

            <!-- Button -->
            <a href="#conteudo"><div class="scroll-down"><span><i class="fa fa-angle-down fa-2x"></i></span></div></a>
        </section>
        <!-- Home end -->

        <article id="conteudo" class="container">
            <?php echo $content ?>
        </article>

        <?php include(Site::$path['includes/'] . "disqus.php") ?>

        <?php include(Site::$path['includes/'] . "footer.php") ?>
        <?php include(Site::$path['includes/'] . "footer-js.php") ?>
        <?php include(Site::$path['/'] . "/app/assets/clean/include-js.php") ?>

    </body>
</html>