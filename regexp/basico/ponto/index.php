<?php
/**
 * . (ponto) nas expressões regulares
 * ponto, ., expressões regulares ., expressões regulares ponto
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/regexp/basico/ponto/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo?></h1>
                <p>Trago várias imagens (todas de autoria do Aurélio Marinho) ilustrando o uso do "ponto"</p>
                <p>Como as imagens são grandes mas os textos pequenos eu tirei o menu esquerdo só para facilitar a
                    leitura. Quem estiver de smartphone vai ter que dar um zoom nas imagens.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">


                <!-- Corpo da matéria -->
                <div class="col-md-12" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="intro">Conceito</h2>
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
                            <h2 id="exemplo">Exemplo</h2>
                        </div>

                        <div class="bs-example ">
                            <img class="img-rounded" alt="### Exemplo de Expressão Regular" src="ponto-casa.png" />
                        </div>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="exemplo-marinho">Exemplos do Marinho:</h2>
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
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>