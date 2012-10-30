<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Um bom começo | devfuria.com.br</title>
        <link href="../furia/boot/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../furia/boot/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
        <link href="../furia/treeview/jquery.treeview.css" rel="stylesheet" type="text/css" />
        <link href="../furia/css/furia.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-align-justify icon-white"></span>
                    </a>

                    <!-- Be sure to leave the brand out there if you want it shown -->
                    <a class="brand" href="#">DevFuria</a>


                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active">
                                <a href="#">PHP</a>
                            </li>
                            <li class="">
                                <a href="#">Javascript</a>
                            </li>
                            <li class="">
                                <a href="#">HTML & CSS</a>
                            </li>
                            <li class="">
                                <a href="#">MySql</a>
                            </li>
                            <li class="">
                                <a href="#">Análise</a>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-group direita visible-desktop" >
                        <a class="btn dropdown-toggle btn-inverse btn-primary" data-toggle="dropdown" href="#">
                            Mais...
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.devfuria.com.br/mapa-do-site">mapa do site</a></li>
                            <li><a href="https://github.com/flaviomicheletti/devfuria">forke me on github</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="span12">
                    <header>
                        <ul class="breadcrumb">
                            <li><a href="http://www.devfuria.com.br/">Home</a> <span class="divider">/</span></li>
                            <li><a href="../../../php/">PHP</a> <span class="divider">/</span></li>
                            <li class="active">Um bom começo</li>
                        </ul>
                    </header>

                    <!--GOOGLE search -->
                    <p>
                    <style type="text/css">table.gsc-search-box td {vertical-align: top;}</style>
                    <gcse:search></gcse:search>
                    <script type="text/javascript">
                        (function() {
                            var cx = '008752684436201828935:ov97wzanhkq';
                            var gcse = document.createElement('script');
                            gcse.type = 'text/javascript';
                            gcse.async = true;
                            gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                                '//www.google.com.br/cse/cse.js?cx=' + cx;
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(gcse, s);
                        })();
                    </script>
                    </p>
                </div>
            </div>


            <div class="row">
                <div class="span6">
                    <div class="furia-secoes-intro">
                        <h1>Curso (in) completo de PHP</h1>
                        <p>O <em>Curso PHP (in)completo</em> foi desenvolvido primando-se a qualidade, simplicidade e objetividade</p>
                        <p>Caso o leitor sinta a falta de qualquer um deses elementos, pedimos a gentileza de nos enviar um feedback</p>

                        <p>O curso está dividido em níveis: 0(zero), básico, intermediário e avançado</p>
                        <p>Dentro de cada nível encontram-se as mátérias(artigos).</p>

                        <p>O nível o(zero) destina-se as pessoas que nunca tiveram um contato com o assunto (linguagem de programação).
                            Imaginamos que o público alvo enquadras-se em um desses perfis: entusiastas de informática, estudantes
                            de informática no início do curso e estagiários em geral</p>

                        <p>Os demais níveis dispensam apresentação.</p>

                        <p>Seja bem vindo ao curso!</p>
                        <p>Esperamos que seja proveitoso.</p>
                    </div>
                </div>
                <div class="span6">
                    <div class="furia-feedback ">
                        <form  id="form-feedback" action="#">
                            <h6>Feedback</h6>
                            <p>Deixe seu feedback, ele é muito importante.</p>
                            <p>
                                <input type="text" name="contato" id="contato" placeholder="você" class="span6"/>
                            </p>
                            <p>
                                <input type="text" name="email" id="email" placeholder="email" class="span6"/>
                            </p>
                            <p>
                                <textarea name="feedback" id="feedback"  rows="10" cols="10" placeholder="Seu feedback!" class="span6"></textarea>
                            </p>
                            <p>
                                <input type="hidden" value="/devfuria/www.devfuria.com.brOLD/php/nivel-zero/um-bom-comeco/" name="url" />
                                <input type="hidden" value="508ad7e3d505d7.35271062" name="id" />
                                <input type="submit" value="Enviar" class="btn btn-primary"/>
                            </p>
                        </form>
                        <script type="text/javascript">

                        </script>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="span10 offset1">
                    <div class="furia-tree">
                        <h5>PHP</h5>
                        <div id="treecontrol" style="display: block;">
                            <a href="#" title="Collapse the entire tree below"><img alt="-" src="../imagens/minus.gif">Contrair todos</a>
                            <a href="#" title="Expand the entire tree below"><img alt="+" src="../imagens/plus.gif">Expandir todos</a>
                        </div>

                        <ul class="filetree treeview" id="browser">
                            <li class="collapsable lastCollapsable"><div class="hitarea collapsable-hitarea lastCollapsable-hitarea"></div><span class="folder">Nível 0</span>
                                <ul style="display: block;">
                                    <li><a href="nivel-zero/um-bom-comeco" class=""><span class="file">Um bom começo</span></a></li>
                                    <li><a href="nivel-zero/logica-de-programacao" class=""><span class="file">Lógica de Programação</span></a></li>
                                    <li><a href="nivel-zero/antes-de-enfiar-o-pe-na-jaca" class=""><span class="file">Antes de enfiar o pé na jáca</span></a></li>
                                    <li><a href="nivel-zero/intalando-o-ambiente" class=""><span class="file">Instalando o ambiente no estilo NEXT, NEXT, NEXT</span></a></li>
                                    <li><a href="nivel-zero/estudos-de-logica-1-ao-5" class=""><span class="file">Estudos de lógica com respostas (1 ao 5)</span></a></li>
                                    <li class="last"><a href="nivel-zero/estudos-de-logica-6-ao-10" class=""><span class="file">Estudos de lógica com respostas (6 ao 10)</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>            
        </div><!-- container-  -->

        <script src="../furia/js/ga.js"></script>
        <script src="../furia/boot/js/jquery.js"></script>
        <script src="../furia/boot/js/bootstrap.js"></script>
        <script src="../furia/treeview/jquery.treeview.js"></script>
        <script src="../furia/js/furia.js"></script>
    </body>
</html>