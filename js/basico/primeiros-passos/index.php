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

        <div class="container">

            <div class="row">
                <div class="span12">
                    <header>
                        <ul class="breadcrumb">
                            <li><a href="<?php echo ROOT_PATH; ?>">Home</a> <span class="divider">/</span></li>
                            <li><a href="<?php echo BASE_PATH; ?>js/">JS</a> <span class="divider">/</span></li>
                            <li class="active"><?php echo $materia->titulo; ?></li>
                        </ul>
                        <p>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                        </p>
                    </header>

                    <article>
                        <h1>Primeiros passos</h1>

                        <p>Na matéria de introdução eu comentei que vamos aprender JS junto com HTML e CSS. Na verdade vamos aprender as coisas
                            separadamente, porém vamos trabalhar com os três elementos como se fosse ingredientes obrigatórios em cada receita.</p>

                        <p>Neste ponto é importante entendermos a obrigação de cada um desses componentes. O <em>JS será encarregado do comportamento</em>
                            da página, da interação com o usuário, dos enventos possíveis (click, duplo click, teclado, movimentação do mouse, e
                            etc...), de tudo aquilo que pode beneficinar a interface do sistema.</p>

                        <p>O CSS se encarrega-rá da apresentação da página. Pensou em estilizar, formatar, desenhar, cuidar da aparência, layout,
                            cores, fontes, bordas, espaçamento, disposição dos elementos ...pensou em CSS. Ele cuidará da embalagem, do roupagem
                            que sua página web irá vestir. Estilizar é com o CSS.</p>

                        <p>Sobrou para o HTML deixar claro qual é o conteúdo, em outras palavras, "tudo que é necessário para ler e entender o
                            conteúdo de ua página web. [] O código HTML deve fazer o máximo para transmintir o significado (ou semântica) do
                            conteúdo." O HTML descreve o conteúdo da página, a isso chamamos de <em>marcação semântica</em>.</p>

                        <p>OK. O que acabamos de fazer foi separar as obrigações. Com isso, acabamos de praticar técnica chamada de <em>programação em
                                camadas</em>. No caso, temos 3 camadas: conteúdo(HTML), apresentação(CSS) e comportamento(JS).</p>

                        <p>O HTML será encarregado da marcação do
                            conteúdo</p>

                        <h2>Aonde colocar o Javascript ?</h2>

                        <p>O ideal é escrevermos o código JS em um arquivo texto com extensão .js e incluí-lo no arquivo HTML dessa forma:</p>

                        <div class="code menor">
                            <h6>codigo.js</h6>
                            <pre>
var foo = "Eu sou javascript";
alert(foor);

// Este aqui é o arquivo separado

                            </pre>
                        </div>

                        <p>O JS do arquivo "codigo.js" fica dentro do arquivo HTML, confira no trecho seguinte:</p>

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

                        <div class="code menor">
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

                        <div class="code menor">
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
    &lt;script type="text/javascript" src="codigo.js"&gt;&lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;
                            </pre>
                        </div>

                        <p>Colocamos o código JS no final do HTML.</p>

                        <h2>Típos de variáveis</h2>

                        <p class="fim">Fim da matéria</p>
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

    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>