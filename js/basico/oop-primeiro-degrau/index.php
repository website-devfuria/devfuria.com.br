<?php
/**
 * JS
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
        $core->head->setTitle('OOP');
        $core->head->setDescription('Dandos os primeiros passos na refatoração de código. Aprenda a codificar de forma mais coesa.');
        $core->head->setkeywords('oop em javascript');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_JS;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>


        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>OOP - primeiro degrau</h1>
                <p>Introduziremos conceito intuitivo  de</p>
                <p>programação orientadação a objeto, propriedades e métodos.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">07/02/2014</span>, escrito em <span class="label label-info">08/07/2013</span>.
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
                            <h1 id="oop">OOP</h1>
                        </div>
                        <p>Vamos introduzir a orientação a objeto (vulgo OOP) na sua vida de progamador(ra).</p>

                        <p>O mundo OOP em Javascript é um pouco diferente, o caminho é tortuoso.
                            E se você acha que ter os conceitos de OOP irá ajudar, ledo engando. "Instanciar uma classe não" tem o mesmo significado
                            em JS. Por enquanto, vamos entender que um objeto possue propriedades (variáveis) e métodos (funções) como em qualquer
                            outra linguagem e que definimos ele através das chaves {}.</p>

                        <p>Objeto vazio (e solto):</p>

                        <pre><code class="language-javascript">{}</code></pre>

                        <p>Objeto vazio atribuído a uma variável qualquer:</p>

                        <pre><code class="language-javascript">var foo = {};</code></pre>

                        <p>Objeto coma algumas prorpiedades:</p>

                        <pre><code class="language-javascript">var personagem = {
    nome: "Zé Colméia",
    peso: "gordinho",
    tipo: "bicho"
};
</code></pre>

                        <p>Agora podemos referenciar as propriedades:</p>

                        <pre><code class="language-javascript">console.log(personagem.nome);
// saída: "Zé Colméia"
</code></pre>

                        <p>Acrescentando um método:</p>

                        <pre><code class="language-javascript">var personagem = {
    nome: "Zé Colméia",
    peso: "gordinho",
    tipo: "bicho",
    chamarCatatau: function() {
        // código para chamar o colega Catatau
    }
};
</code></pre>

                        <p>Executando esse método:</p>

                        <pre><code class="language-javascript">personagem.chamarCatatau();
</code></pre>

                        <p><em>Preciso que você faça um esforço mental para entender e decorar o seguinte código</em>:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var objeto = {
    propriedade: "podemos iniciar a variável com algum valor",
    metodo: function() {
        // código
        // código
        // código
    },
    outroMetodo: function() {
        // código
        // código
        // código
    }
};</code></pre>
                        </div>

                        <p>Repare que tanto as propriedades quanto os métodos:</p>

                        <ul>
                            <li>são separados por virgula.</li>
                            <li>utilzam os dois pontos como separador "nome: valor"</li>
                        </ul>
                    </div>
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
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Introduction_to_Object-Oriented_JavaScript" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Manual do JS (MDN)</h4>
                                        <p class="list-group-item-text">Introduzindo a Orientação a Objetos.</p>
                                        <span class="label label-default">https://developer.mozilla.org/en-US/docs/Web/JavaScript/Introduction_to_Object-Oriented_JavaScript</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    $core->paginacao->link_ativo = "/js/basico/oop-primeiro-degrau/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_JS]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Javascript</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_JS);
                        $core->lista->link_ativo = "/js/basico/oop-primeiro-degrau/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
