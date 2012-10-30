<?php
var_dump(realpath(__FILE__));
var_dump(__FILE__);
var_dump(dirname(__FILE__));
var_dump(getcwd());
var_dump($_SERVER);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Um bom começo | devfuria.com.br</title>
        <?php include "furia/comp/head_links_css.php"; ?>
    </head>
    <body>

        <?php include "nav_top.php"; ?>

        <div class="container">

            <div class="row">
                <div class="span12">

                    <header>
                        <?php include "breadcrumb.php"; ?>
                        <p><?php include "google_search.php"; ?></p>
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
                    <?php include "face_botao_curtir.php"; ?>

                </div><!-- span12 -->
            </div><!-- row -->
        </div><!-- container -->

    <?php include "rodape_js.php"; ?>
    </body>
</html>