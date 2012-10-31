<?php
require "furia/includes/bs.php";
defined('BASE_PATH') or die;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" => "webapp; app's; desenvolvimento, desenvolvimento web, website, webstandards, programação, php, php fácil, php iniciando, php iniciante, começando com php, php descomplicado, javascript, js, html, html5, css",
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php
        $nav_top['secao'] = null;
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <p>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                        </p>
                    </header>

                    <div class="furia-lista-materias">
                        <div class="materia-resumo lista-php">
                            <a href="php/nivel-zero/um-bom-comeco">
                                <em>Instalando o Ambiente no estilo NEXT, NEXT, NEXT.</em>
                                <span class="resumo">
                                    Advertência: Programar é algo viciante, programe com moderação. Bom, mas nem tudo são flores! Para codificar de forma ímpar é preciso ter organização e disciplina. Essa matéria é um convite para as boas práticas.
                                </span>
                                <span class="hidden-phone assinatura">Flávio Micheletti, atualizado em 11/09/2012, escrito em 5/06/2012.</span>
                            </a>
                        </div>
                        <div class="materia-resumo lista-html-css">
                            <a href="php/nivel-zero/um-bom-comeco">
                                <em>Estudos de lógica com respostas (1 ao 5)</em>
                                <span class="resumo">
                                    As aplicações web prometem ser o futuro do desenvolvimento de software. Sua natureza, sua arquitetura, conquistou os usuários e os desenvolvedores também (programador web não trabalha, se diverte). Essa matéria é uma introdução ao desenvolvimento web. Divirta-se!
                                </span>
                                <span class="hidden-phone assinatura">Flávio Micheletti, atualizado em 11/09/2012, escrito em 5/06/2012.</span>
                            </a>
                        </div>
                        <div class="materia-resumo lista-js">
                            <a href="php/nivel-zero/um-bom-comeco">
                                <em>Um bom começo</em>
                                <span class="resumo">
                                    As aplicações web prometem ser o futuro do desenvolvimento de software. Sua natureza, sua arquitetura, conquistou os usuários e os desenvolvedores também (programador web não trabalha, se diverte). Essa matéria é uma introdução ao desenvolvimento web. Divirta-se!
                                </span>
                                <span class="hidden-phone assinatura">Flávio Micheletti, atualizado em 11/09/2012, escrito em 5/06/2012.</span>
                            </a>
                        </div>
                        <div class="materia-resumo lista-mysql">
                            <a href="php/nivel-zero/um-bom-comeco">
                                <em>Um bom começo</em>
                                <span class="resumo">
                                    As aplicações web prometem ser o futuro do desenvolvimento de software. Sua natureza, sua arquitetura, conquistou os usuários e os desenvolvedores também (programador web não trabalha, se diverte). Essa matéria é uma introdução ao desenvolvimento web. Divirta-se!
                                </span>
                                <span class="hidden-phone assinatura">Flávio Micheletti, atualizado em 11/09/2012, escrito em 5/06/2012.</span>
                            </a>
                        </div>
                        <div class="materia-resumo lista-analise">
                            <a href="php/nivel-zero/um-bom-comeco">
                                <em>Um bom começo</em>
                                <span class="resumo">
                                    As aplicações web prometem ser o futuro do desenvolvimento de software. Sua natureza, sua arquitetura, conquistou os usuários e os desenvolvedores também (programador web não trabalha, se diverte). Essa matéria é uma introdução ao desenvolvimento web. Divirta-se!
                                </span>
                                <span class="hidden-phone assinatura">Flávio Micheletti, atualizado em 11/09/2012, escrito em 5/06/2012.</span>
                            </a>
                        </div>
                    </div>
                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>

                </div><!-- span12 -->
            </div><!-- row -->
        </div><!-- container -->

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>