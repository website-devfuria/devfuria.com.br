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
        $core->head->setTitle('');
        $core->head->setDescription('');
        $core->head->setkeywords('');
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
                <h1>Code - A lâmpada (refatorando)</h1>
                <p>Vamos refatorar o código da matéria anterior. Introduziremos conceitos intuitivo de refatoração e
                    aprenderemos um pouco sobre: orientação a objeto, propriedades/métodos e  como organizar seu código.</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">08/07/2013</span>, escrito em <span class="label label-info">08/07/2013</span>.
            </div>
        </div>


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
                                <a href="#ref-tdd">Refatoração e TDD</a>
                            </li>
                            <li>
                                <a href="#oop">OOP</a>
                            </li>
                            <li>
                                <a href="#alterando">Finalmente... alterando o ćodigo!</a>
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
                            <h1 id="ref-tdd">Refatoração e TDD (primeiro contato)</h1>
                        </div>  

                        <p>Quando escrevemos um código e, posteriomente, voltamos para ajustar algumas coisas, estamos praticando o <em>refactoring</em>.
                            Quero dizer, estamos refatorando o código. O conceito intuitivo da palavra traz consigo a idéia de que "refatorar" é
                            simplificar uma expressão. Não é isso o que vem a sua mente ?</p>

                        <p>OK, mas simplificar o que exatamente? E de que forma?</p>

                        <p>Refatorar é um arte e o seu mestre chama-se Martin Fowler, há um manual completo dizendo como, quando e porque refatorar
                            o seu código fonte. Obviamente, não vamos nos deter nisso agora, mesmo porque é cedo para adentrarmos nesse assunto.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Livro de Martin Fowler" src="refactoringBook.jpg">
                            <p>Livro: Refatoração, aperfeiçoando o projeto de código existente (Martin Fowler).</p>
                        </div>                        

                        <p>Mas, repondendo a pergunta, vamos alterar o ćodigo no sentido de clareza, pelo menos inicialmente. O problema é que
                            não vamos utilizar nenhuma metodologia para isso, ou seja, vamos aplicar arte pura e um pouco de gosto pessoal.</p>

                        <p>Meu objetivo é plantar na sua mente uma semente chamada <strong>"organização, limpeza e clareza"</strong>.</p>

                        <p>Essa palavras faem sentido para você? Sim ? Que ótimo, pois é nesse sentido que vamos tentar alterar o cósigo fonte original de nosso exemplo.</p>

                        <p><strong>O código já está funcionando, se eu mexer poderei danificá-lo!</strong></p>

                        <p>Poderá e com certeza irá danificá-lo.</p>

                        <p>Então, como alterar o código já existente (e funcionando) de forma que ele não se quebre?</p>

                        <p>Remédio: TDD (Test Driven Development), nada mais é do que escrever um teste antes de codificar. Mas,
                            novamente caímos em um tema que é avançado e estamos ainda no nível básico.</p>

                        <p>TDD é uma arte (ninja) e o mestre e o Kent Bech.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Livro de Kent Bech" src="tdd-livro.jpg">
                            <p>Livro: Desenvolvimento Guiado por Testes (Kent Bech)</p>
                        </div>                        

                        <p>O conceito é muito interessante, procure ler sobre, abaixo uma figura para estigá-lo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### ### Ciclo do TDD" src="tdd-conceito.jpg">
                            <p>Ciclo do TDD</p>
                        </div>                        

                        <p>A refatoração é irmã siamesa do TDD. Uma não vive sem a outra.</p>
                    </div>  

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="oop">OOP</h1>
                        </div>
                        <p>A orientação a objeto (vulgo OOP) é o único assunto que é avançado mas que já posso introduzir na sua vida
                            de progamador(ra).</p>

                        <p>Posso fazer isso, principalmente pelo fato de que o mundo OOP em Javascript é um pouco diferente, o caminho é tortuoso.
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
                            <h1 id="alterando">Finalmente... alterando o ćodigo!</h1>
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
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
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
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
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
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
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
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
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
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
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
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
<em>lampada.setEvento();</em></code></pre>
                        </div>

                        <p>Aproveite para testar o código, digo, veja cada valor de variável, sugestões;</p>

                        <p>console.log(lampada);
                            console.log(lampada.ligada);
                            console.log(lampada.element);
                            console.log(lampada.acender);
                            console.log(lampada.apagar);</p>

                        <p>Procure variações e pontos diferentes, vá anotando os nomes que aparecem, você deve notar pelo menos os seguintes</p>

                        <ul>
                            <li>object</li>
                            <li>function()</li>
                            <li>undefined</li>
                            <li>false</li>
                            <li>true</li>
                        </ul>

                        <p>Se preferir, baixe os arquivos através dos links: <a href="codigo-refatorado.js" title="link-externo">codigo-refatorado.js</a>, <a href="lampadas.html" title="Arquivo HTML">lampadas.html</a>.</p>

                        <p>Baixe também as imagens das lâmpadas: <a href="pic_bulboff.gif" title="link-externo">lâmpada apagada</a>, 
                            <a href="pic_bulbon.gif" title="link-externo">lâmpada acesa</a></p>

                        <p>Agora chega de lâmpadas, na próxima matéria mudarei o assunto, até lá.</p>                      

                        <?php
                        $core->paginacao->link_ativo = "/js/basico/code-lampadas-refatorando/";
                        $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_JS]);
                        include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                        ?>                        

                    </div>

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
                        $core->lista->link_ativo = "/js/basico/code-lampadas-refatorando/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>

    </body>
</html>
