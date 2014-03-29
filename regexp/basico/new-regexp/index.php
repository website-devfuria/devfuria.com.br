<?php
/**
 * Compilando Expressões Regulares
 * compilar er, compilar expressões regulares
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/regexp/basico/new-regexp/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1><?php echo $pagina->titulo ?></h1>
                <p>Essa matéria, curtinha diga-se de passagem, mostra como compilar uma ER.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Sobre a função</h1>
                        </div>

                        <p>Utilizando-se do construtor <code>RegExp()</code> podemos compilar a expressão regular antes de usá-la. </p>

                        <p>Isso é uma vantagem? Não exatamente.</p>

                        <p>Caso sua expressão esteja sintaticamente errada o erro existirá como nos demais exemplos e seu código irá travar.</p>

                        <p>Uma vantagem seria o fato de ser possível criar a expressão regular apartir de uma string, isto quer dizer que
                            é possível criar a expressão de forma dinâmica.</p>

                        <p>Imagine que o usuário irá digitar a palavra <code>"exemplo"</code> e o sistema armazenará o valor na variável <code>regexp</code>. Agora é só
                            passar a variável para o construturor e executar a expressão.</p>

                        <p>Resumindo, a ER criada apartir de uma string lhe derá mair poder de flexibilidade e, obviamente, maior responsabilidade.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var string = "Casa com a palavra exemplo",
    pattern,
    resultado;

// pattern.test
pattern = new RegExp(regexp);
resultado = pattern.test(string);
console.log(pattern, resultado);


// pattern.exec
pattern = new RegExp(regexp);
resultado = pattern.exec(string);
console.log(pattern, resultado);


// string.match
pattern = new RegExp(regexp);
resultado = string.match(pattern);
console.log(pattern, resultado);</code></pre>
                        </div>

                        <p>Uma vez com a ER compilada podemos executá-la em qualquer uma das três formas já discutidas nas matérias anteirores.</p>

                        <div class="bs-docs-section">
                            <div class="page-header">
                                <h1 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h1>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Internet</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <h4 class="list-group-item-heading">Devfuria - matérias anteiores</h4>
                                            <p class="list-group-item-text">Leia as três materias anteriores a estas falando sobre as funções exec(), teste() e match().</p>
                                        </a>
                                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions?redirectlocale=en-US&redirectslug=JavaScript%2FGuide%2FRegular_Expressions" class="list-group-item" title="link-externo">
                                            <h4 class="list-group-item-heading">Documentação Oficial</h4>
                                            <p class="list-group-item-text">...falando sobre o objeto global RegExp. Apesar de ser um rascunho, há informações
                                                bastante precisas</p>
                                            <span class="label label-default">http://www.php.net/manual/pt_BR/getting-started.php</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php include BASE_PATH . VIEWS_PATH . "/cursos/paginacao.php"; ?>
                    </div><!-- Corpo da matéria -->
                </div><!-- row -->
            </div><!-- Matéria -->
            <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
            <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>