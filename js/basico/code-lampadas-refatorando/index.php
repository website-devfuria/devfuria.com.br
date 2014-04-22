<?php
/**
 * Refatorando o código da matéria "Code - A lâmpada"
 * refatoração, oop
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/basico/code-lampadas-refatorando/");
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
                <p>Em matérias anteriores vimos o básico do OOP, refatoração e código limpo.</p>
                <p>Nesta matéria vamos praticar tudo isso!</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <!-- navegação lateral esquerdo -->
                <div class="col-md-3">
                    <div class="bs-sidebar hidden-print" role="complementary">
                        <ul class="nav bs-sidenav">
                            <li>
                                <a href="#intro">Analisando código</a>
                            </li>
                            <li>
                                <a href="#alterando">Alterando o ćodigo!</a>
                            </li>
                            <li>
                                <a href="#quase">Código (quase) final</a>
                            </li>
                            <li>
                                <a href="#final">Código final</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="intro">Analisando código</h1>
                        </div>

                        <p>Estou insistindo neste pequeno trecho de código com o intuito de facilitar o aprendizado. Se você já lêu a
                            matéria introdutória e a matéria anterior, então já conhece o código e terá menos trabalho para entender a matéria atual.
                            Acredito que este "menos trabalho" lhe ajudará em muito pois você focará os assuntos novos e não o código em si.</p>

                        <p>Abaixo segue o código original que vamos trabalhar:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src = "pic_bulboff.gif";
    } else {
        element.src = "pic_bulbon.gif";
    }
};</code></pre>
                        </div>

                        <p><em>O que podemos melhorar nesse código ?</em></p>

                        <p><em>Mas melhorar em que sentido ?</em></p>

                        <p>Você mudaria esse código? </p>

                        <p>Mas qual o objetivo da mudânça?</p>

                        <p>Pare e reflita um pouco!</p>
                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="alterando">Alterando (refatorando?) o ćodigo!</h1>
                        </div>

                        <p>A primeira coisa a fazer é criarmos um objeto para a nossa querida lâmpada:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
};</code></pre>
                        </div>

                        <p>Vamos mudar um pouco a lógica para simplificar as coisas, ok?
                            Utilizaremos a proriedade "ligada" com valores booleanos para registrar e sabermos a qualquer momento se a lâmpada está
                            ou não acessa. </p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
};</code></pre>
                        </div>

                        <p>Ao criarmos a propriedade, aproveito para "setar" com seu valor padrão, no caso "false".</p>

                        <p>Isso quer dizer que ela começa-rá apagada;</p>

                        <p>Agora vamos utilizar dois métodos, um para acender e um para apagar:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
    acender: function() {
    },
    apagar: function() {
    }
};</code></pre>
                        </div>

                        <p>Pense um pouco!</p>

                        <p>O que esses métodos devem fazer?</p>

                        <p>Eles devem anotar o caminho da lâmpada da nossa tag img onde:</p>

                        <pre><code class="language-javascript">lampada.elemt.scr
</code></pre>

                        <p>representa...</p>

                        <pre><code class="language-javascript">objeto.tag_img.caminho_da_imagem = "um/caminho/qualquer"
</code></pre>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulboff.gif";
    }
};</code></pre>
                        </div>

                        <p>Está faltando uma propriedade para acomodar o elemento HTML "img".</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
    <em>element: {},</em>
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulboff.gif";
    }
};</code></pre>
                        </div>

                        <p>Como colocado acima, essa propriedade é iniciada com um objeto vazio, porém podemos e queremos que ela seja iniciada
                            com a referência ao elemento img, logo incluímos:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
    <em>element: document.getElementById('myimage'),</em>
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulboff.gif";
    }
};</code></pre>
                        </div>

                        <p>Antes nós ligávamos o evento à imagem dessa forma:</p>

                        <pre><code class="language-javascript">element.onclick = function() {...</code></pre>

                        <p>Agora vamos fazer algo parecido:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
    element: document.getElementById('myimage'),
    <em>setEvento: function() {
        lampada.element.onclick = function(){
            // código que acende ou apaga alâmpada
        };
    },</em>
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulboff.gif";
    }
};</code></pre>
                        </div>

                        <p>Só falta escrever a lógica desse método para que ele, corretamente, acende e apague a lâmpada.</p>

                        <p>Lembre-se que estamos utilizando a proriedade "ligada" para saber se a lâmpada está ou não ligada.
                            Devemos colocar a figura correta conforme a prorpiedade ligada, ou seja:</p>

                        <p>Segue a lógica</p>

                        <pre><code class="language-javascript">se lâmpada ligada então
    desligar()
    anote que ela está desligada
senão
    ligar()
    anote que ela está ligada
</code></pre>

                        <p>Pegou a lógica? Não, então pegue, não dá para seguir sem ela.</p>

                        <p>Trasformando o pseudoćodigo em ćodigo de verdade:</p>

                        <pre><code class="language-javascript">lampada.element.onclick = function(){
        if (lampada.ligada) {
            lampada.apagar();
            lampada.ligada = false;
        } else {
            lampada.acender();
            lampada.ligada = true;
        }
    };
</code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="quase">Código (quase) final</h1>
                        </div>

                        <p>Ufa, chegamos!</p>

                        <p>Observe o código final!</p>

                        <p>Ele ficou maior que o original, porém ficou mais organizado, mais limpo e claro.</p>

                        <p>Pode ser que você não esteja sentindo isso nesse momento, talvez você prefira o código antigo.</p>

                        <p>Essa impressão, acontece por causa do seu grau de percepção ser de iniciante. Com o tempo você irá preferir o codigo
                            resultante ou, pelo menos, evitará o código original.</p>

                        <p>Repare ao menos que evitamos o uso do ainda "místico" <em>match</em> e a lógica ficou mais fácil.</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
    element: document.getElementById('myimage'),
    setEvento: function() {
        lampada.element.onclick = function(){
            if (lampada.ligada) {
                lampada.apagar();
                lampada.ligada = false;
            } else {
                lampada.acender();
                lampada.ligada = true;
            }
        };
    },
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulboff.gif";
    }
};</code></pre>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="final">Código final!</h1>
                        </div>

                        <p>Para o código funcionar de verdade, falta realizarmos a primeira chamada ao método que inicia as coisas.</p>

                        <p>Em nosso casso, trata-se do método setEventos() e essa chamada fazemos no final de tudo, veja:</p>

                        <div class="code">
                            <h6>JS</h6>
                            <pre><code class="language-javascript">var lampada = {
    ligada: false,
    element: document.getElementById('myimage'),
    setEvento: function() {
        lampada.element.onclick = function(){
            if (lampada.ligada) {
                lampada.apagar();
                lampada.ligada = false;
            } else {
                lampada.acender();
                lampada.ligada = true;
            }
        };
    },
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/basico/intro/pic_bulboff.gif";
    }
};
<em>lampada.setEvento();</em></code></pre>
                        </div>


                        <div data-height="493" data-theme-id="2897" data-slug-hash="Jpefb" data-default-tab="js" class='codepen'><pre><code>var lampada = {
    ligada: false,
    element: document.getElementById(&#x27;myimage&#x27;),
    setEvento: function() {
        lampada.element.onclick = function(){
            if (lampada.ligada) {
                lampada.apagar();
                lampada.ligada = false;
            } else {
                lampada.acender();
                lampada.ligada = true;
            }
        };
    },
    acender: function() {
        lampada.element.src = &quot;http://www.devfuria.com.br/js/basico/intro/pic_bulbon.gif&quot;;
    },
    apagar: function() {
        lampada.element.src = &quot;http://www.devfuria.com.br/js/basico/intro/pic_bulboff.gif&quot;;
    }
};
lampada.setEvento();</code></pre>
                            <p>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/Jpefb'>a lâmpada- refatorado</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
                        </div><script async src="//codepen.io/assets/embed/ei.js"></script>


                        <h3>Exercício</h3>

                        <p>Aproveite para testar o código, digo, veja cada valor de variável, sugestões;</p>

                        <ul>
                            <li><code>console.log(lampada);</code></li>
                            <li><code>console.log(lampada.ligada);</code></li>
                            <li><code>console.log(lampada.element);</code></li>
                            <li><code>console.log(lampada.acender);</code></li>
                            <li><code>console.log(lampada.apagar);</code></li>
                        </ul>

                        <p>Procure variações e pontos diferentes, vá anotando os nomes que aparecem, você deve notar pelo menos os seguintes</p>

                        <ul>
                            <li><code>object</code></li>
                            <li><code>function()</code></li>
                            <li><code>undefined</code></li>
                            <li><code>false</code></li>
                            <li><code>true</code></li>
                        </ul>

                        <p>Agora chega de lâmpadas, na próxima matéria mudaremos o assunto, até lá.</p>
                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
