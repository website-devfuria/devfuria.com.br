<?php
require "../../../furia/includes/bs.php";
$materia = new Materia(8);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo $materia->titulo; ?> | <?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => $materia->resumo,
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_JS . "marcação semântica; exemplos de javascript; "
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
    </head>
    <body>

        <?php
        $nav_top['secao'] = "js";
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>
        
        <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>

        <div class="container sombra">
            <div class="row">
                <div class="span12">
                    <article>
                        <h1>Preparando o terreno</h1>

                        <p>Na matéria de introdução eu comentei que vamos aprender JS junto com HTML e CSS. Na verdade vamos aprender as coisas
                            separadamente, porém vamos trabalhar com os três elementos como se fosse ingredientes obrigatórios em cada receita.</p>

                        <p>Neste ponto é importante entendermos a obrigação de cada um desses componentes. O <em>JS será encarregado do comportamento</em>
                            da página, da interação com o usuário, dos enventos possíveis (click, duplo click, teclado, movimentação do mouse, e
                            etc...), de tudo aquilo que pode beneficinar a interface do sistema.</p>

                        <p>O CSS se encarrega-rá da apresentação da página. Pensou em estilizar, formatar, desenhar, cuidar da aparência, layout,
                            cores, fontes, bordas, espaçamento, disposição dos elementos ...pensou em CSS. Ele cuidará da embalagem, do roupagem
                            que sua página web irá vestir. Estilizar é com o CSS.</p>

                        <p>Sobrou para o HTML deixar claro qual é o conteúdo, marcando o conteúdo. Em outras palavras: "tudo que é necessário para
                            ler e entender o conteúdo de ua página web. O código HTML deve fazer o máximo para transmintir o significado
                            (ou semântica) do conteúdo." O HTML descreve o conteúdo da página, a isso chamamos de <em>marcação semântica</em>.</p>

                        <p>OK. O que acabamos de fazer foi separar as obrigações. Com isso, acabamos de praticar técnica chamada de <em>programação em
                                camadas</em>. No caso, temos 3 camadas: conteúdo(HTML), apresentação(CSS) e comportamento(JS).</p>

                        <h2>Aonde colocar o Javascript ?</h2>

                        <p>O ideal é escrevermos o código JS em um arquivo texto com extensão .js e incluí-lo no arquivo HTML dessa forma:</p>

                        <div class="code menor">
                            <h6>index.html</h6>
                            <pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml"&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
        <em>&lt;script type="text/javascript" src="codigo.js" /&gt;</em>
    &lt;/head&gt;
    &lt;body&gt;
        ...
    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p>No código seguinte temos a mesmíssima coisa, só que em um arquivo html 5. O palavrão 'DOCTYPE' virou duas palavrinhas:</p>

                        <div class="code">
                            <h6>index.html</h6>
                            <pre>
<em>&lt;!DOCTYPE html&gt;</em>
&lt;html&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
        <em>&lt;script type="text/javascript" src="codigo.js"&gt;&lt;/script&gt;</em>
    &lt;/head&gt;
    &lt;body&gt;
        ...
    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p>As abordagem acima sofre de um pequeno inconveniente: a ordem em que o arquivo é lido e executado pelo browser. Os
                            navegadores executam arquivos JS assim que o código é baixado e depois continua a reenderizar o HTML restante. Isso
                            significa que se o seu código depender do HTML, e acredite vai depender, ele não conseguirá executar corretamente.</p>

                        <p>Atualmente há algumas saídas para este problema, a abordagem mais utilizada é a boa e velha dica: <em>Coloque o script no
                                final do HTML !!!</em>, pronto resolvido. Isso garante que seu JS será executado após todo o HTML ter sido carregado e de
                            quebra sua página obtem um ganho de performance. Em outra matéria, falarei mais sobre essa questão. Por hora vejamos
                            como ficou nosso HTML:</p>

                        <div class="code">
                            <h6>index.html</h6>
                            <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
        &lt;title&gt;Hello, World!&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        ...
    <em>&lt;script type="text/javascript" src="codigo.js"&gt;&lt;/script&gt;</em>
    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p><em>Colocamos o código JS no final do HTML.</em></p>

                        <h2>FireBug</h2>

                        <p>O FireBug é um plugin do navegador Firefox, ele é opensource e está disponível para download em:
                            <a href="https://addons.mozilla.org/pt-br/firefox/addon/firebug" title="FireBug">https://addons.mozilla.org/pt-br/firefox/addon/firebug</a></p>

                        <p>Ele será necessário para debugar-mos o código escrito em JS.</p>

                        <p>Então, quando nos depararmos com o seguinte código:</p>

                        <div class="code menor">
                            <h6>JS</h6>
                            <pre>
var qualquer = "uma string qualquer";
console.log(qualquer);
                            </pre>
                        </div>

                        <p>...estaremos na verdade, fazendo uso do plugin FireBug, pois a instrunção <em>console.log()</em> não é do JS e sim do plugin
                            FireBug. O resultado do código é conferido na seção "console" do plugin.</p>

                        <h2>Javascript é seguro?</h2>

                        <p>Vamos estender essa pergunta para: a linguagem de programação X é sergura?</p>

                        <p>Nenhuma linguagem de programação é segura ou insegura, a pergunta correta seria:</p>

                        <p><em>O desenvolvedor programa de forma segura?</em></p>

                        <p>O que acontece com JS é que o código fica exposto a qualquer usuário, por isso, percebemos erroneamente, que JS é inseguro,
                            mas isto não é verdade. Seguro ou inseguro, como já disse, é a forma como se programa.</p>

                        <p>Obviamente, tendo em vista que o código fica exposto, não criaremos nenhum <em>código sensível</em> (um código que possa ser
                            explorado por um hacker causando danos a aplicação).</p>

                        <h2>Características da linguagem</h2>

                        <p>JS é uma linguagem baseada em protótipos, em funções de primeira classe, fracamente tipada, imperativa e estruturada,
                            implementa closures.</p>

                        <p>Se você já acompanhou algumas matérias do curos de PHP deve ter percebido que eu utilizo "um pouco de engenharia reversa":
                            explico o essencial, demonstro algum código e vamos aprofundando aos poucos. Acredito que essa seja uma boa forma para
                            ensinar e aprender programação. Com este curso de JS, não será diferente. As características aqui apresentadas serão
                            explicadas ao longo do curso quando o leitor já estiver mais familizarizado com a linguagem e, dessa forma, poderá
                            aproveitar melhor o curso.</p>

                        <h2>JS é realmente Orientado a Objetos ?</h2>

                        <p>A questão se JS é ou não OOP ainda causa certa polêmica, mas segundo Douglas Crockford's (o mago do JS):</p>

                        <blockquote>
                            <p>"O JavaScript é orientado à objetos? Bem, ele contém objetos que podem conter dados e métodos que agem sobre esses
                                dados. Objetos podem conter outros objetos. O JavaScript não possui classes, mas possui construtores que são capazes
                                de fazer o que as classes fazem, incluindo agir como contêineres para classes de variáveis e métodos. Ele não possui
                                herança orientada a classe, mas tem herança orientada a protótipo.</p>
                        </blockquote>

                        <p><em>Na próxima matéria veremos o básico do JS.</em></p>

                        <?php include BASE_PATH.COMPONENTES_PATH."materia_fim.php"; ?>
                    </article>

                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>

                </div><!-- span12  -->
            </div><!-- row  -->
        </div><!-- container -->

        <div class="container sem_borda">
            <div class="row">
                <div class="span10 offset1">
                    <?php include BASE_PATH.COMPONENTES_PATH."tree_parcial.php"; ?>
                </div>
            </div>

            <div class="row">
                <div class="span8 offset2">
                    <?php include BASE_PATH.COMPONENTES_PATH."form_feedback.php"; ?>
                </div>
            </div>
        </div>
        
    <?php include BASE_PATH.COMPONENTES_PATH."rodape.php"; ?>
        
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>