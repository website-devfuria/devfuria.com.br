<?php
/**
 * JS
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/js/basico/select-combobox/");
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
                <p>Veremos como enviar e receber dados através dos controles</p>
                <p>combobox (input-form-select)</p>
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
                            <li><a href="#select">O controle &lt;select&gt;</a></li>
                            <li><a href="#o-que-foi-selecionado">O que foi selecionado?</a></li>
                            <li><a href="#carregando-a-combobox">Carregando a combobox</a></li>
                            <li><a href="#removendo-elementos">Removendo os elementos</a></li>
                            <li><a href="#resultado-final">Resultado final</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="select">O controle &lt;select&gt;</h2>
                        </div>

                        <p>
                            O controle <code>select</code> é uma caixa de seleção, o usuário poderá escolher uma entre
                            as demais opções da lista.
                        </p>

                        <p>Vamos criar uma combo "cidades", teremos alguns nomes de cidades nesta combo.</p>

                        <p>Nossa combo se parecerá como a da figura abaixo:</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Exemplo de combobox" src="input-form-select.png">
                        </div>

                        <p>
                            Eu vou utilizar 4 elementos: 3 cidades e 1 opção em branco (nulo, ""). Nosso HTML será como
                            o seguinte:
                        </p>

                        <pre><code class="language-html">&lt;select id="cboCidades"&gt;
    &lt;option value=""&gt;&lt;/option&gt;
    &lt;option value="scs"&gt;São Caetano do Sul&lt;/option&gt;
    &lt;option value="sa"&gt;Santo André&lt;/option&gt;
    &lt;option value="sbc"&gt;São Bernardo do Campo&lt;/option&gt;
&lt;/select&gt;</code></pre>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="o-que-foi-selecionado">Descobrindo o que foi selecionado.</h2>
                        </div>

                        <p>
                            A propriedade <code>id</code> da combo será <code>cboCidades</code>, logo poderemos encontrar
                            o controle da seguinte forma:
                        </p>

                        <pre><code class="language-javascript">var comboCidades = document.getElementById("cboCidades");</code></pre>

                        <p>
                            A variável <code>comboCidades</code> possue a combobox, então podemos acessar algumas propriedades
                            como, por exemplo, <code>selectedIndex</code> que contém um valor inteiro com o índice do
                            item (option) selecionado.
                        </p>

                        <p>
                            Explicando melhor, cada tag <code>option</code> possue um índice, em nosso exemplo temos o
                            seguinte:
                        </p>

                        <table class="table">
                            <tr>
                                <th class="text-center">índice</th><th>option</th>
                            </tr>
                            <tr>
                                <td class="text-center">0</td><td><code>&lt;option value=""&gt;&lt;/option&gt;</code></td>
                            </tr>
                            <tr>
                                <td class="text-center">1</td><td><code>&lt;option value="scs"&gt;São Caetano do Sul&lt;/option&gt;</code></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td><td><code>&lt;option value="sa"&gt;Santo André&lt;/option&gt;</code></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td><td><code>&lt;option value="sbc"&gt;São Bernardo do Campo&lt;/option&gt;</code></td>
                            </tr>
                        </table>

                        <p>
                            Então, quando o usuário clicar em uma opção da combo, o seguinte código mostrará qual é o índice
                            escolhido:
                        </p>

                        <pre><code class="language-javascript">console.log(comboCidades.selectedIndex);</code></pre>

                        <p>Outra propriedade muito útil é a <code>length</code>, ela representa o total de elementos de uma combo.</p>

                        <p>Se a combo não tiver elementos, o valor de <code>length</code> será 0.</p>

                        <p>
                            Sabendo o total de elementos, podemos percorrer a coleção <code>options</code> (outra propriedade importante)
                            através em um laço <code>for</code>.
                        </p>

                        <pre><code class="language-javascript">for (i = 0; i < comboCidades.length; i = i + 1) {
    console.log(comboCidades.options[i]);
}</code></pre>

                        <p>
                            Concluímos que podemos acessar a <code>option</code> escolhida passando o valor de
                            <code>selectIndex</code> como parâmetro da coleção <code>options</code>:
                        </p>

                        <pre><code class="language-javascript">comboCidades.options[comboCidades.selectedIndex];</code></pre>

                        <p>E cada <code>option</code> possue pelo menos 2 propriedades interessantes: <code>text</code>
                            e <code>value</code>:</p>

                        <ul>
                            <li>
                                <p><code>text</code> é nossa "label". É o texto entre as tags <code>&lt;options&gt;&lt;/options&gt;</code>.</p>
                                <p><pre><code class="language-javascript">comboCidades.options[comboCidades.selectedIndex].text;</code></pre></p>
                            </li>
                            <li>
                                <p><code>value</code> é o "chave". É o valor da propriedade <code>value</code> da tag <code>option</code>.</p>
                                <p><pre><code class="language-javascript">comboCidades.options[comboCidades.selectedIndex].value;</code></pre></p>
                            </li>
                        </ul>

                        <p>Agora podemos criar um botão em nosso HTML para dispararmos uma função que nos dirá os informações
                            da combobox. No HTML adicionamos:</p>

                        <pre><code class="language-html">&lt;input type="button" id="btnInfo" value="Ver informações no firebug" /&gt;</code></pre>

                        <p>E nosso código Javascript será:</p>

                        <pre><code class="language-javascript">document.getElementById("btnInfo").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");
    console.log("O indice é: " + comboCidades.selectedIndex);
    console.log("O texto é: " + comboCidades.options[comboCidades.selectedIndex].text);
    console.log("A chave é: " + comboCidades.options[comboCidades.selectedIndex].value);
};</code></pre>

                        <p>Pronto! com as informações da <code>select</code> em mãos você poderá tomar qualquer direção.</p>

                        <p>Agora, entra a lógica de seu script: enviar os dados via Ajax, exibir outros dados, etc...</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="carregando-a-combobox">Carregando a combobox</h2>
                        </div>

                        <p>Para carregar a combo vamos utilizar o botão <code>btnCarregar</code>, adicione ao seu HTML:</p>

                        <pre><code class="language-html">&lt;input type="button" id="btnCarregar" value="Carregar combobox" /&gt;</code></pre>

                        <p>Temos que criar cada <code>option</code> na mão, na unha mesmo.</p>

                        <p>A idéa é criar um elemento HTML com Javascript, utilizaremos a função <code>document.createElement('tag')</code>.</p>

                        <p>
                            Armazenamos em uma variável qualquer, por exemplo <code>elem</code> e então adicionamos dinamicamente
                            2 propriedades: <code>text</code> e <code>value</code>.
                        </p>

                        <pre><code class="language-javascript">var elem = document.createElement('tag')
elem.value = "scs";
elem.text  = "São Caetano do Sul";
</code></pre>

                        <p>
                            Uma vez criado os elementos, basta adicioná-los a nossa combobox. Fazemos isso através do
                            método <code>add(elem, elem[])</code>.
                        </p>

                        <p>O primeiro parâmetro é fácil: é o elemento que acabamos de criar.</p>

                        <p>O segundo também: ele diz onde (em que índice) será inserido o elemento.</p>

                        <pre><code class="language-javascript">comboCidades.add(elem, comboCidades.options[0]);</code></pre>

                        <p>Resumindo, é isto aqui:</p>

                        <pre><code class="language-javascript">var elem = document.createElement('tag')
elem.value = "scs";
elem.text  = "São Caetano do Sul";
comboCidades.add(elem, comboCidades.options[0]);
</code></pre>

                        <p>Então teremos que repetir o trecho acima para cada <code>option</code>, veja:</p>



                        <pre><code class="language-javascript">document.getElementById("btnCarregar").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");

    var opt0 = document.createElement("option");
    opt0.value = "0";
    opt0.text = "";
    comboCidades.add(opt0, comboCidades.options[0]);

    var opt1 = document.createElement("option");
    opt1.value = "scs";
    opt1.text = "São Caetano do Sul";
    comboCidades.add(opt1, comboCidades.options[1]);

    var opt2 = document.createElement("option");
    opt2.value = "sa";
    opt2.text = "Santo André";
    comboCidades.add(opt2, comboCidades.options[2]);

    var opt3 = document.createElement("option");
    opt3.value = "sbc";
    opt3.text = "São Bernardo do Campo";
    comboCidades.add(opt3, comboCidades.options[3]);

};</code></pre>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="selecionando-um-valor">Selecionando um valor para a combobox</h2>
                        </div>

                        <p>Carregar é uma coisa, agora precisamos selecionar uma valor para a nossa combo.</p>

                        <p>Lembra da propriedade <code>selectedIndex</code>? Ela é leitura e escrita.</p>

                        <p>Quer dizer, podemos atribuir o índice que desejamos que fique selecionado.</p>

                        <pre><code class="language-javascript">comboCidades.selectedIndex = 2; // atribuindo um índice qualquer</code></pre>

                        <p>Mais fácil impossível. Então vamos complicar um pouquinho.</p>

                        <p>Vamos atribuir um valor randômico.</p>

                        <p>
                            Precisaremos da propriedade <code>length</code> em conjunto com as funções <code>Math.random()</code>
                            e <code>Math.floor()</code>.
                        </p>

                        <p>O código abaixo retornará um inteiro randômico entre 0 e o máximo da combobox.</p>

                        <pre><code class="language-javascript">Math.floor(Math.random() * comboCidades.length)</code></pre>

                        <p>Não se assuste com o código acima!</p>
                        <p>
                            Se precisar, veja a matéria
                            <?php Aux::printAncora("/js/math-random-numero-randomico-em-javascript/", "titulo") ?>
                            sobre números randômicos em Javascript.
                        </p>

                        <p>Juntando tudo:</p>

                        <pre><code class="language-javascript">comboCidades.selectedIndex = Math.floor(Math.random() * comboCidades.length);</code></pre>

                        <p>Vamos colocar isso em um botão chamado <code>btnAleatoriamente</code> e atribuir a função.</p>

                        <pre><code class="language-javascript">document.getElementById("btnAleatoriamente").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");
    comboCidades.selectedIndex = Math.floor(Math.random() * comboCidades.length);
};</code></pre>

                        <p>Não se esqueça de criar o botão no arquivo HTML.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="removendo-elementos">Removendo os elementos da combobox</h2>
                        </div>

                        <p>O método <code>remove(indice)</code> remove o elemento.</p>

                        <pre><code class="language-javascript">document.getElementById("btnRemoverItem").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");
    comboCidades.remove(0);
};</code></pre>
                        <p>
                            O método acima está removendo sempre o elemento de índice 0 (zero). Em outras palavras, ele
                            está removendo o primeiro item.
                        </p>

                        <h3>Removendo todos os itens</h3>

                        <p>
                            Para remover todos os itens basta percorrer a coleção <code>options</code> e aplicar a função
                            <code>remove(indice)</code>.
                        </p>

                        <p>Eu mostrei como percorre a coleção lá no começo do artigo, veja:</p>

                        <pre><code class="language-javascript">for (i = 0; i < comboCidades.length; i = i + 1) {
    comboCidades.options[i];
}</code></pre>
                        <p>É só trocar o <code>[i]</code> por <code>remove(i)</code></p>

                        <pre><code class="language-javascript">for (i = 0; i < comboCidades.length; i = i + 1) {
    comboCidades.remove(i);
}</code></pre>

                        <p>Mas aqui tem uma pegadinha e seu código não funcionará.</p>

                        <p>Ao remover o elemento, o índice da combo (a propriedade <code>comboCidades.length</code>) se refaz e bagunça tudo.</p>

                        <p>Solução, optei por colocar sempre o índice 0 (zero).</p>

                        <p>Dessa forma, o laço intera a coleção da combobox e retira sempre o primeiro <code>option</code> seja ele qual for.</p>

                        <pre><code class="language-javascript">for (i = 0; i < comboCidades.length; i = i + 1) {
    comboCidades.remove(0);
}</code></pre>

                        <p>
                            Mas esse 0 (zero) fixo mes fez lembrar que não preciso do "interador" <code>i</code> e
                            consequentemete, não preciso do laço <code>for</code>, então utilizei um laço <code>while</code>:
                        </p>

                        <pre><code class="language-javascript">document.getElementById("btnRemoverTodos").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");
    while (comboCidades.length) {
        comboCidades.remove(0);
    }
};</code></pre>


                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="resultado-final">Resultado final</h2>
                        </div>

                        <p data-height="311" data-theme-id="2897" data-slug-hash="BdHDG" data-default-tab="result" class='codepen'>See the Pen <a href='http://codepen.io/flaviomicheletti/pen/BdHDG/'>Exemlo de combobox</a> by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
                        <script async src="//codepen.io/assets/embed/ei.js"></script>


                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
