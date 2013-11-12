<?php
/**
 * RegExp
 */
/**
 * Includes
 */
require "../../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head = new Head();
        $core->head->setTitle('REGEXP');
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop = new NavTop();
        $core->navtop->secoes = $core->secoes;
        $core->navtop->secao = Core::SECAO_ER;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>new RegExp()</h1>
                <p>Essa matéria, curtinha diga-se de passagem, mostra como compilar uma ER.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-warning">22/07/2013</span>, escrito em <span class="label label-warning">22/07/2013</span>.
            </div>
        </div>

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

                        <p>Utilizando-se do construtor RegExp() podemos compilar a expressão regular antes de usá-la. </p>

                        <p>Isso é uma vantagem? Não exatamente.</p>

                        <p>Caso sua expressão esteja sintaticamente errada o erro existirá como nos demais exemplos e seu código irá travar.</p>

                        <p>Uma vantagem seria o fato de ser possível criar a expressão regular apartir de uma string, isto quer dizer que
                            é possível criar a expressão de forma dinâmica.</p>

                        <p>Imagine que o usuário irá digitar a palavra "exemplo" e o sistema armazenará o valor na variável <em>regexp</em>. Agora é só 
                            passar a variável para o construturor e executar a expressão.</p>

                        <p>Resumindo, a ER criada apartir de uma string lhe derá mair poder de flexibilidade e, obviamente, maior responsabilidade.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre>
var string = "Casa com a palavra exemplo",
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
console.log(pattern, resultado);
                            </pre>
                        </div>

                        <p>Uma vez com a ER compilada podemos executá-la em qualquer uma das três formas já discutidas nas matérias anteirores.</p>

                        <h2>Leituras adicionais sugeridas</h2>

                        <dl id="leitura_adcionais">
                            <dt>Internet</dt>
                            <dd>Leia as três materias anteriores a estas falando sobre as funções exec(), teste() e match()
                                <a href="http://www.php.net" >http://www.php.net</a>
                                <a href="http://www.php.net" >http://www.php.net</a>
                                <a href="http://www.php.net" >http://www.php.net</a>
                            </dd>

                            <dd>Documentação Oficial falando sobre o objeto global RegExp. Apesar de ser um rascunho há informações
                                bastante precisas
                                <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions?redirectlocale=en-US&redirectslug=JavaScript%2FGuide%2FRegular_Expressions">Doc. Oficial</a>
                            </dd>
                        </dl>
                    </div>

                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <?php include BASE_PATH . VIEWS_PATH . "/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
