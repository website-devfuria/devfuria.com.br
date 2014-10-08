<?php
/**
 * Como funcionam os métodos GET e POST
 * http; get; post; stateless
 */
require "../../core/boot.php";
$pagina = $model->getPagina("/php/basico/metodo-http-get-post/");
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
                <p>Um breve introdução ao protocolo HTTP</p>
                <p>Entenda a questão da perda de estado (state less)</p>
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
                            <li><a href="#http">O protocolo HTTP</a></li>
                            <li>
                                <a href="#requisicao">Requisição</a>
                            </li>
                            <li>
                                <a href="#resposta">Resposta</a>
                            </li>
                            <li>
                                <a href="#get">GET</a>
                            </li>
                            <li>
                                <a href="#post">POST</a>
                            </li>
                            <li>
                                <a href="#stateless">Sem estado (state less)</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="http">O protocolo HTTP</h2>
                        </div>

                        <p>O funcionamento do PHP depende do Apache e o apache depende do protocolo HTTP.</p>

                        <p>O protocolo HTTP é a roda que faz girar toda a internet, ele está na camada mais alta
                            do modelo OSI (não confuda OSI com ISO).</p>

                        <p>O que é camada de rede? Espere aí, estamos fugindo do escopo deste artigo, mas é um
                            assunto básico (para quem está estudando redes de computadores), então fica a imagem só para
                            estigá-lo(a).</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Figura do modelo OSI" src="camada-osi.jpg">
                            <p>
                                <a href="http://tucones.blogspot.com.br/2010/11/redenetwork-explicacao-resumida-camada.html" title="link-externo" class="img-responsive">Fonte da imagem</a>
                            </p>
                        </div>

                        <p>O HTTP trabalha com requisições (request) e respotas (response).</p>

                        <p>Você connhece um software que faz requisições HTTP?</p>

                        <p>Conhece sim! Esse navegador que está utilizando para ver está página é a resposta.</p>

                        <p>A imagem abaixo ilustra o processo.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Primeiro diagrama modelo OSI" src="http-diagram.png">
                            <p>
                                <a href="http://marceloweb.info/principais-diferencas-entre-os-metodos-http-get-e-post/" title="link-externo" class="img-responsive">Fonte da imagem</a>
                            </p>
                        </div>

                        <blockquote>
                            <p>Se você digita um endereço na barra de endereço seu navegador e aperta a tecla enter o
                                navegador faz uma requisição HTTP para o servidor do endereço digitado e o método dessa
                                requisição é o GET.</p>

                            <p>Se você clica em um link em um site, o navegador também se encarrega de fazer um requisição
                                HTTP com o método GET, para buscar o conteúdo da página que você clicou.</p>

                            <p><small>Fonte: http://www.comocriarsites.com/html/como-funciona-os-metodos-get-e-post-diferencas/</small></p>
                        </blockquote>

                        <p>A imagem abaixo (do concorrente devmedia) ilustra o esquema com mais detalhes.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### Segundo diagrama modelo OSI " src="http-diagram2.jpg">
                            <p>
                                <a href="http://www.devmedia.com.br/como-funcionam-as-aplicacoes-web/25888" title="link-externo" class="img-responsive">Fonte da imagem</a>
                            </p>
                        </div>

                        <p>Existem outros métodos além do GET e POST, veja o quadro abaixo.</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="metodos-http.png">
                            <p>
                                <a href="http://andreiabohner.org/symfony2docs/book/http_fundamentals.html" title="link-externo" class="img-responsive">Fonte da imagem</a>
                            </p>
                        </div>

                        <p>Eles servirão quando o assunto for sobre REST, por enquanto ficaremos apenas com GET e POST.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="requisicao">Requisição</h2>
                        </div>

                        <p>A requisição comprende três elementos:</p>

                        <ul>
                            <li>
                                Uma linha de pedido:
                                <pre><code class="no-highlight">POST /www.devfuria.com.br/script-para-onde-envio-os-dados.php HTTP/1.1</code></pre>
                            </li>
                            <li>
                                Os campos de cabeçalho do pedido
                                <pre><code class="no-highlight">Host: localhost
User-Agent: Mozilla/5.0 (X11; Linux x86_64; rv:24.0) Gecko/20100101 Firefox/24.0
... eu apaguei as demais linhas
</code></pre>
                            </li>
                            <li>
                                O corpo do pedido
                                <pre><code class="no-highlight">email=joao@dasilva.com
username=João da Silva</code></pre>
                            </li>
                        </ul>

                        <p>A requisição acima foi gerada pelo formulário web ilustrado abaixo</p>

                        <div class="bs-example">
                            <img class="img-rounded" alt="### " src="form.png">
                        </div>

                        <p>Repare que os campos viraram um par <code>nome=valor</code> no corpo do pedido.</p>

                        <p>Essa "<em>mágica</em>" eu mostro na próxima matéria.</p>

                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="resposta">Resposta</h2>
                        </div>

                        <p>A resposta também comprende três elementos:</p>

                        <ul>
                            <li>
                                Uma linha de estatuto:
                                <pre><code class="no-highlight">HTTP/1.1 200 OK</code></pre>
                            </li>
                            <li>
                                Os campos de rubrica da resposta
                                <pre><code class="no-highlight">Date: Fri, 31 Jan 2014 14:03:55 GMT
Server: Apache/2.2.15 (CentOS
... eu apaguei as demais linhas
</code></pre>
                            </li>
                            <li>
                                O corpo da resposta
                                <pre><code class="no-highlight">Aqui é documeto (normalmente HTML) de resposta</code></pre>
                            </li>
                        </ul>

                        <p>Repare na "linha de estatuto" que temos o código de resposta <code>200</code> e sua descrição <code>OK</code>.</p>

                        <p>Abaixo temos as 4 respotas, de longe, mais encontradas.</p>

                        <div class="bs-example">
                            <table class="table  table-striped">
                                <tr>
                                    <th class="text-center">Código</th>
                                    <th class="text-center">Mensagem</th>
                                    <th class="text-center">Descrição</th>
                                </tr>
                                <tr>
                                    <td>200</td>
                                    <td>OK</td>
                                    <td class="text-left">O pedido foi realizado correctamente</td>
                                </tr>
                                <tr>
                                    <td>301</td>
                                    <td>MOVED</td>
                                    <td class="text-left">Os dados pedidos foram transferidos para um novo endereço</td>
                                </tr>
                                <tr>
                                    <td>404</td>
                                    <td>NOT FOUND</td>
                                    <td class="text-left">Clássico! O servidor não encontrou nada no endereço indicado. Partiram sem deixar endereço…:)</td>
                                </tr>
                                <tr>
                                    <td>500</td>
                                    <td>INTERNAL ERROR</td>
                                    <td class="text-left">O servidor encontrou uma condição inesperada que o impediu de satisfazer o pedido (às vezes acontecem coisas aos servidores…)</td>
                                </tr>
                            </table>
                            <p>
                                As descrições foram retiradas deste
                                <a href="http://pt.kioskea.net/contents/266-o-protocolo-http" title="link-externo" >artigo</a> (O cara foi "comédia")
                            </p>
                        </div>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="get">GET</h2>
                        </div>

                        <p>O método pode ser gerado por um formulário web e também por um link em sua página HTML.
                            Ele de limite de capacidade e a URL só aceita (obviamente) strings,
                            se você precisar passar arquivos deverá utilizar o POST.</p>

                        <blockquote>
                            <p>
                                O método GET utiliza a própria URI (normalmente chamada de URL) para enviar dados ao servidor,
                                quando enviamos um formulário pelo método GET, o navegador pega as informações do formulário
                                e coloca junto com a URI de onde o formulário vai ser enviado e envia, separando o endereço
                                da URI dos dados do formulário por um “?” (ponto de interrogação).
                            </p>
                            <p><small>Fonte: http://www.comocriarsites.com/html/como-funciona-os-metodos-get-e-post-diferencas/</small></p>
                        </blockquote>

                        <p>Ao final da URL colocamos o sinal <code>?</code> e utilizamos a combinação <code>nome=valor</code> separados
                            pelo sinal <code>&</code>.</p>

                        <p>Também podemos utilizar o formulário web com a propriedade  <code>metho</code> "setada" como <code>get</code>, exemplo:</p>

                        <pre><code class="no-highlight">&lt;form method="get"&gt; </code></pre>
                    </div>

                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="post">POST</h2>
                        </div>

                        <p>O método só ṕode ser gerado através de um formulário web (ou através de AJAX), não dá para
                            um link gerar o método post. Na verdade até dá, com uso de JS podemos ler os campos, criar a
                            URL e enviar tudo via AJAX, mas essa é história para outra matéria.</p>

                        <p>O método POST é mais seguro que o GET! <strong>Besteira, ele é tão inseguro quanto
                                o GET.</strong> Só porque o usuário não vê os dados na URL não quer dizer que eles (os dados) estão protegidos.</p>

                        <p>Se a questão é seguranca, eu posso te dar uma certeza: tem muita ladainha na net. Mas se quiser
                            um lugar para começar, então veja o conteúdo da
                            <a href="https://www.owasp.org/index.php/Main_Page" title="link-externo">OWASP</a>.</p>

                        <p>Todo controle colocado dentro do formulário web com a propriedade <code>name</code> preenchida
                            gera um par <code>nome=valor</code> para ser enviado no servidor.</p>

                        <p>Na matéria seguinte veremos passo a passo como gerar as requisições, tanto em GET como em POST.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="stateless">Sem estado (state less)</h2>
                        </div>

                        <p>Eis o ponto central de uma aplicação web: ela é construida sobre um protocolo sem estado.</p>

                        <p>Por "sem estado", qeremos dizer que cada requisição não tem conhecimento de outra requisição e
                            isso muda tudo.</p>

                        <p>Muda a lógica, muda a organização, muda a arquitetura.</p>

                        <p>Você precisará entender e se acostumar com essa característica das aplicações web. Alias
                            iremos conquistar isso na prática.</p>

                    </div>


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="leituras">Leituras adicionais sugeridas <small>(Referências)</small></h2>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Internet</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html" class="list-group-item" title="link-externo">
                                        <h4 class="list-group-item-heading">Hypertext Transfer Protocol -- HTTP/1.1</h4>
                                        <p>Aqui é a  rfc2616, é chato ler rfc's mas fazer o quê.</p>
                                        <span class="label label-default">http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html</span>
                                    </a>
                                </div>
                            </div>
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
