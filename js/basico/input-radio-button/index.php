<?php
/**
 * JavaScript e Radio Buttons
 *
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/basico/input-radio-button/");
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
                <h1><?php echo $pagina->titulo ?></h1>
                <p><code>radios[i].checked = true;</code></p>
                <p><code>radios[i].checked = false;</code></p>
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
                            <li><a href="#input-radio">Sobre o controle</a></li>
                            <li><a href="#o-problema">O problema e a solução</a></li>
                            <li><a href="#logica">Nossa lógica</a></li>
                            <li><a href="#codando">Codando</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="input-radio">Sobre o controle &lt;input type="radio"</h2>
                        </div>

                        <p>O input radio é um controle de opções, é uma única escolha entre as opções possíveis.</p>

                        <p>O básico sobre o controle nós já vimos na matéria
                           <?php Aux::printAncora("/html-css/basico/formularios-web/#input-radio", "titulo") ?></p>

                        <p>Se quiser ver uma prévia do que produziremos nesta matéria acesse o <a href="https://gist.github.com/flaviomicheletti/9533196" title="link-externo">Gist</a>.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Formulário com radios buttons" src="form-radios-button.png">
                        </div>


                        <div class="code">
                            <h6>form.html</h6>
                            <pre><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
    &lt;head&gt;
        &lt;title&gt;Form de exemplo com radios&lt;/title&gt;
        &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;form action="form-action.php" method="post"&gt;
            &lt;p&gt;
                &lt;input type="radio" name="band-rock" value="beatles"/&gt;The Beatles
                &lt;input type="radio" name="band-rock" value="led-zeppelin"/&gt; Led Zeppelin
                &lt;input type="radio" name="band-rock" value="pink-floyd"/&gt;Pink Floy
            &lt;/p&gt;
            &lt;p&gt;
                &lt;input type="button" id="btnSubmit" value="Submit me!" /&gt;
                &lt;input type="button" id="btnLoad" value="Load!" /&gt;
            &lt;/p&gt;
        &lt;/form&gt;
        &lt;script type="text/javascript" src="radios.js"&gt;&lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>
                        </div>


                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="o-problema">O problema e a solução</h2>
                        </div>

                        <p>Se uma radio é uma opção entre pelo menos duas, sabemos que nunca teremos uma única rádio apenas.</p>

                        <p>Podemos ter 2 ou mais radios. Em nosso exemplo temos 3 radios.</p>

                        <p>Essas radios são radios afins, quer dizer, de um mesmo grupo.</p>

                        <p>
                            Como explicitamos isso para o HTML ? Utilizando a propriedade <code>name</code> com o mesmo
                            valor (<code>"band-rock"</code>)
                        </p>

                        <p>
                            Ao invés de utilizar a função <code>getElementById()</code> (que busca pleo "id") precisamos de
                            uma função que traga os lementos pela propriedade <code>name</code>
                        </p>

                        <pre><code>getElementsByName("valor-da-propriedade-name");</code></pre>

                        <p>O resultado desta função é um conjunto de elemento, ou seja, um <strong>array</strong> de
                            radios buttons.</p>

                        <p>Já está conseguindo visualizar a solução do problema?</p>

                        <p>
                            Precisamos percorrer esse conjunto de radios e em cada radio perguntar se está ou não "checado".
                            Se estiver checado, então nos avise.
                        </p>

                        <p>Passando à limpo a idéia:</p>

                        <ol>
                            <li>Pegue os radios buttons do mesmo grupo</li>
                            <li>Perconteudondo cada radio (laço)...</li>
                            <li>diga se está ou não "checado"</li>
                        </ol>

                        <p>Ops! Nosso problema acaba de virar solução, agora podemos aplicar um pouco de lógica.</p>


                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="logica">Nossa lógica</h2>
                        </div>

                        <p>Queria te convidar para uma viagem de transformação.</p>
                        <p>
                            Quero demonstrar como nosso objetivo (representado pelo pesudocódigo abaixo) vai aos poucos
                            se transformando em código fonte.
                        </p>

                        <pre><code class="no-highlight">capturar os radios (que possuem o mesmo "name")
percorrer os radios e em cada interação...
perguntar se ele (o radio) foi ou não "checado"
</code></pre>

                        <p>Vamos tentar transformar o pseudocódigo acima...</p>

                        <pre><code class="no-highlight">coleçao_de_radios = capturar os radios (que possuem o mesmo "name")
percorrer coleçao_de_radios e em cada interação...
se coleçao_de_radios[i] foi checkado nos avise
</code></pre>

                        <p>Continuamos com a transformação...</p>

                        <pre><code class="no-highlight">var radios = capturar os radios (que possuem o mesmo "name")
for (cada radios) {
    se (radios[i] foi checkado) {
        nos avise
    }
}
</code></pre>

                        <p>Mais um pouco...</p>

                        <pre><code class="no-highlight">var radios = capturar os radios (que possuem o mesmo "name")
for(i = 0; enquanto i seja menor que radios.quantidade_de_radios) {
    se (radios[i].foi_checado == true) {
        console.log("eis o  radio assinalado: " radios[i] )
    }
}
</code></pre>

                        <p>Ainda mais...</p>

                        <pre><code class="no-highlight">var radios = capturar pela propriedade "name" ("band-rock")
for(i = 0;  i < radios.quantidade_de_radios; i++) {
    if (radios[i].foi_checado == true) {
        console.log("Escolheu: "  radios[i]);
    }
}
</code></pre>
                        <p>Agora "para fechar"...</p>

                        <pre><code class="no-highlight">var radios = document.getElementsByName("band-rock");
for(var i = 0;  i < radios.length; i++) {
    if (radios[i].checked == true) {
        console.log("Escolheu: "  radios[i]);
    }
}
</code></pre>
                        <p>Coisa linda!</p>

                        <p>Elencamos o problema, descobrimos uma solução, utilizamos nossa lógica.</p>

                        <p>Agora pode codificar em paz irmão. Amém!</p>

                    </div>



                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="codando">Codando...</h2>
                        </div>

                        <h3>...o evento do botão "submit"</h3>

                        <p>Precisamos "pegar" o controle HTML, lembra como fazemos isso?</p>

                        <p>Sim, com a função <code>getElementById()</code>, veja.</p>

                        <pre><code class="language-javascript">document.getElementById("nome-do-controle")</code></pre>

                        <p>De posse do controle, agora podemos atribuir uma função ao evento <code>click</code>.</p>

                        <pre><code class="language-javascript">document.getElementById("btnSubmit").onclick = function() {

};</code></pre>

                        <p>
                            Dentro de nossa função, precisamos percorrer os radios. "Percorrer" é sinônimo de <strong>laço
                                de repetição</strong>, então faremos algo parecido com isto....
                        </p>

                        <pre><code class="language-javascript">for (var i = 0; i < radios.<em>quantidade_de_radios</em>; i++) {
}
</code></pre>
                        <p>
                            Para saber a quantidade de radios precisamos "pegar" todos esses radios, fazemos isso com a
                            função <code>getElementsByName("nome-dos-elementos").</code>
                        </p>

                        <pre><code class="language-javascript">var radios = document.getElementsByName("band-rock");</code></pre>

                        <p>E depois, descobrimos o tamanho (quantidade de radios) através da propriedade <code>length</code>.</p>

                        <pre><code class="language-javascript">radios.length</code></pre>

                        <p>Atualizando o nosso laço com a propriedade <code>length</code>, temos</p>

                        <pre><code class="language-javascript">for (var i = 0; i < radios.<em>radios.length</em>; i++) {
}
</code></pre>
                        <p>Pausa, junte tudo para ver como está o nosso código.</p>

                        <pre><code class="language-javascript">document.getElementById("btnSubmit").onclick = function() {
    var radios = document.getElementsByName("band-rock");
    for (var i = 0; i < radios.length; i++) {
    }
};
</code></pre>

                        <p>Estamos quase pronto.</p>

                        <p>
                            Sabemos que a propriedade <code>checked</code> do elemento nos indicará se ele está ou não
                            "checkado". Então <code>if (cadaRadio.checked)</code> resolve nosso problema, porém não
                            podemos nos esquecer que a variável <code>radios</code> é uma <strong>coleçao</strong> ou
                            melhor, um <strong>array</strong>. E como tal, cada elemento deve ser acessado através de seu
                            <strong>indice</strong>, exemplo: <code>radios[0]</code>, <code>radios[1]</code>, etc...
                        </p>

                        <p>Resumindo, nosso <code>if</code> ficará assim</p>

                        <pre><code class="language-javascript">if (radios[i].checked)</code></pre>

                        <p>Que é a mesmíssima coisa que</p>

                        <pre><code class="language-javascript">if (radios[i].checked == true)</code></pre>

                        <p>
                            O nosso <code>if</code> diz o seguinte: "se o elemento estiver checado eu farei..."
                            ... que tal mostrarmos o valor do "radio"?
                        </p>

                        <pre><code class="language-javascript">radios[i].value</code></pre>

                        <p>Pronto, eis nossa função</p>

                        <pre><code class="language-javascript">document.getElementById("btnSubmit").onclick = function() {
    var radios = document.getElementsByName("band-rock");
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            console.log("Escolheu: " + radios[i].value);
        }
    }
};
</code></pre>


                        <h3>...o evento do botão "Load!"</h3>

                        <p>O botão "Load" será encubido de carregar, ou melhor, assinalar uma radio qualquer.</p>

                        <p>Podemos começar da mesma forma que o botão "submit"</p>

                        <pre><code class="language-javascript">document.getElementById("btnLoad").onclick = function() {

};</code></pre>

                        <p>
                            A propriedade <code>elemento.checked</code> é de leitura e escrita, ou seja, podemos atribuir
                            um valor booleano para alterar o estado do elemento.
                        </p>

                        <pre><code class="language-javascript">radios[i].checked = true;</code></pre>

                        <p>
                            Dessa vez não brincaremos com um valor
                            <?php $pag = Aux::getPagina("/js/math-random-numero-randomico-em-javascript/"); ?>
                            <a href="<?php echo LINKS_PATH . $pag->url ?>" title="<?php echo $pag->titulo ?>">randômico</a>,
                            vamos colocar um valor arbitrário, por exemplo <code>"led-zeppelin"</code>.
                        </p>

                        <pre><code class="language-javascript">if (radios[i].value === "led-zeppelin")</code></pre>

                        <p>
                            Explicando melhor, se o valor que desejamos assinalar em nossa radio button for, por exemplo,
                            "led-zeppelin", então nosso código ficará como segue.</p>

                        <pre><code class="language-javascript">if (radios[i].value === "led-zeppelin") {
    radios[i].checked = true;
}
</code></pre>
                        <p>Na prática, sabemos que a string <code>"led-zeppelin"</code> deveria ser substituída por
                            uma variável e essa variável deveria ser carregada com dados vindo do banco de dados ou de qualquer
                            outra fonte de dados.</p>

                        <p>Mas, para simplificar nossa vida, vamos deixar o valor arbitrário.</p>


                        <h3>O resultado final</h3>

                        <div class="code">
                            <h6>radios.js</h6>
                            <pre><code class="language-javascript">/**
 * Botão Submit
 */
document.getElementById("btnSubmit").onclick = function() {
    var radios = document.getElementsByName("band-rock");
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            console.log("Escolheu: " + radios[i].value);
        }
    }
};

/**
 * Botão Load
 */
document.getElementById("btnLoad").onclick = function() {
    var radios = document.getElementsByName("band-rock");

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].value === "led-zeppelin") {
            radios[i].checked = true;
        }
    }
};
</code></pre>
                        </div>

                        <p>Se preferir acesse o <a href="https://gist.github.com/flaviomicheletti/9533196" title="link-externo">Gist</a>.</p>

                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
