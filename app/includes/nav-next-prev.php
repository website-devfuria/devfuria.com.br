<?php



if (isset($page->front['capitulo'])):

    $dados = menu_dados($page->front['capitulo']);
    // var_dump($dados);

    $_menu = [];

    for ($i=0; $i < count($dados); $i++) {
        $_menu[$i] = ['url' => key($dados), 'title' => current($dados) ];
        next($dados);
    }
    // var_dump($_menu);

    $artigo_prev = [];
    $artigo_next = [];

    for ($i=0; $i < count($_menu); $i++) {
        if ($_menu[$i]['url'] == $GLOBALS['page']->uri_str) {
            $artigo_prev = isset($_menu[$i-1]) ? $_menu[$i-1] : null;
            $artigo_next = isset($_menu[$i+1]) ? $_menu[$i+1] : null;
            break;
        }
    }
    //var_dump($artigo_prev, $artigo_next);

    ?>
        <div class="jumbotron" style="padding-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="pagination">Navegue nesta série!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php if($artigo_prev): ?>
                            <p>
                                <!-- Anterior -->
                                <a class="btn btn-default btn-lg btn-block pagination" href="<?php echo $artigo_prev['url'] ?>">
                                    <img src="/app/assets/imagens/prev-page.png" />
                                    <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> -->
                                    <?php echo $artigo_prev['title'] ?>
                                </a>
                            </p>
                        <?php endif ?>
                    </div>

                    <div class="col-md-6">
                        <?php if($artigo_next): ?>
                            <p class="text-right">
                                <!-- Próximo -->

                                <a class="btn btn-success btn-lg btn-block pagination" href="<?php echo $artigo_next['url'] ?>">
                                    <img src="/app/assets/imagens/next-page.png" />
                                    <?php echo $artigo_next['title'] ?>
                                    <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
                                </a>
                            </p>
                        <?php endif ?>
                    </div>

                </div>
            </div>
        </div>

<?php endif ?>
