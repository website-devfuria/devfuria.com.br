<?php
/**
 * RegExp
 */
/**
 * Includes
 */
require "../../../core/boot.php";
$url = "/regexp/basico/ponto/";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('. (ponto) nas expressões regulares');
        $core->head->setDescription('Matéria que traz várias imagens (todas de autoria do Aurélio Marinho) ilustrando o uso do "ponto"');
        $core->head->setkeywords('ponto, ., expressões regulares ., expressões regulares ponto');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>O ponto .</h1>
                <p>Trago várias imagens (todas de autoria do Aurélio Marinho) ilustrando o uso do "ponto"</p>
                <p>Como as imagens são grandes mas os textos pequenos eu tirei o menu esquerdo só para facilitar a
                    leitura. Quem estiver de smartphone vai ter que dar um zoom nas imagens.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">22/07/2013</span>, escrito em <span class="label label-info">22/07/2013</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">


                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Conceito</h1>
                        </div>

                        <p>O <strong>ponto</strong> casa com qualquer caracter inclusive com as quebras de linhas (<code>\r e \n</code>).</p>

                        <p>O ponto também casa com ele próprio.</p>

                        <div class="code">
                            <h6>regexp</h6>
                            <pre>.</pre>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="exemplo">Exemplo</h1>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded" alt="### Exemplo de Expressão Regular" src="ponto-casa.png" />
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="exemplo-marinho">Exemplos do Marinho:</h1>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded img-responsive" alt="### Exemplo de Expressão Regular" src="ponto-pag41-exemplos.png" />
                            <p>Este é o primeiro exemplo</p>
                            <p>Fonte:
                                <a href="http://www.piazinho.com.br/ed3/exemplos.html#1" title="link-externo">Livro: Expressões Regulares 3 edição, pag 41#1</a>
                            </p>
                        </div>



                        <div class="bs-example ">
                            <img class="img-rounded img-responsive" alt="### Exemplo de Expressão Regular" src="ponto-pag41-acentos.png" />
                            <p>Palavras que foram ou não acentudas</p>
                            <p>Fonte:
                                <a href="http://www.piazinho.com.br/ed3/exemplos.html#2" title="link-externo">Livro: Expressões Regulares 3 edição, pag 41#2</a>
                            </p>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded img-responsive" alt="### Exemplo de Expressão Regular" src="ponto-pag41-maiuscula.png" />
                            <p>Palavras que começam com maiúsculas ou não</p>
                            <p>Fonte:
                                <a href="http://www.piazinho.com.br/ed3/exemplos.html#3" title="link-externo">Livro: Expressões Regulares 3 edição, pag 41#3</a>
                            </p>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded img-responsive" alt="### Exemplo de Expressão Regular" src="ponto-pag41-grafia.png" />
                            <p>Palavras com grafia possivelmente errada</p>
                            <p>Fonte:
                                <a href="http://www.piazinho.com.br/ed3/exemplos.html#4" title="link-externo">Livro: Expressões Regulares 3 edição, pag 41#4</a>
                            </p>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded img-responsive" alt="### Exemplo de Expressão Regular" src="ponto-pag42-horas.png" />
                            <p>Palavras que parcem-se com horas</p>
                            <p>Fonte:
                                <a href="http://www.piazinho.com.br/ed3/exemplos.html#5" title="link-externo">Livro: Expressões Regulares 3 edição, pag 42#5</a>
                            </p>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded img-responsive" alt="### Exemplo de Expressão Regular" src="ponto-pag42-tags.png" />
                            <p>Tags de HTML</p>
                            <p>Fonte:
                                <a href="http://www.piazinho.com.br/ed3/exemplos.html#6" title="link-externo">Livro: Expressões Regulares 3 edição, pag 42#6</a>
                            </p>
                        </div>
                    </div>
                    <?php
                    $core->paginacao->link_ativo = $url;
                    $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_ER][Core::SUB_SECAO_CURSO]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php
        $core->lista->setLinks($core->paginas, Core::SECAO_ER, Core::SUB_SECAO_CURSO);
        $core->lista->link_ativo = $url;
        include BASE_PATH . VIEWS_PATH . "/cursos/footer.php";
        ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
