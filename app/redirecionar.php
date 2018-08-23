<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


#
# Tenta redirecionar
#
function redirecionar($str_uri) {
    //var_dump($str_uri); die();

    $str_uri = acrescentar_barra_no_final($str_uri);

    # se não existir, tento um redirecionamento...
    redirecionar_perdidos($str_uri);
    redirecionar_php_nivel_zero($str_uri);
    redirecionar_logica_basico($str_uri);
    redirecionar_linux_cookbook($str_uri);
    redirecionar_javascript_refs($str_uri);
    redirecionar_pelo_mapa($str_uri);

    # se nenhum redirecionamento deu certo,
    # então só nos resta isso..
    Site::$slim->response->setStatus(404);
    require Site::$path['/'] . "/404.html";
    log_pagina_nao_encontrada($str_uri);
}

    #
    # path/to/foo ---> path/to/foo/
    #
    function acrescentar_barra_no_final($uri_sem_barra_no_final) {
        $arr_uri = explode('/', $uri_sem_barra_no_final);

        $final = substr($uri_sem_barra_no_final, -1);
        if ($final != "/") {
             array_push($arr_uri, "");
        }

        $uri_com_barra_no_final = implode("/", $arr_uri);

        return $uri_com_barra_no_final;
    }



    #
    # [LOGS] registra um log de página não encontrada
    #
    function log_pagina_nao_encontrada($path_to_page) {
        // var_dump(Site::$path['logs/']); die();
        $file = criar_arquivo_log(Site::$path['logs/']);
        $log = new Logger(Site::$name);
        $log->pushHandler(new StreamHandler(Site::$path['logs/'] . $file, Logger::DEBUG));
        $log->addError('404', array($path_to_page));
        return Site::$path['logs/'] . $file;
    }

        # [LOGS] criar um arquivo (vazio) de log conforme a data
        function criar_arquivo_log($pasta) {
            $nome_arquivo = date("Y-m-d");
            $file         = $pasta . "/$nome_arquivo";
            if (!file_exists($file)) {
                $fp = fopen($file, "a");
                fclose($fp);
            }
            return $nome_arquivo;
        }

#
# furia/, old/
#
function redirecionar_perdidos($uri) {
    if (strpos($uri, 'furia')) {
        Site::$slim->redirect('/', 301);
    }
    if (strpos($uri, 'old')) {
        Site::$slim->redirect('/', 301);
    }
}

#
# php/nivel-zero/
#
function redirecionar_php_nivel_zero($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'php' && $arr_uri[2] == 'nivel-zero') {
        $nova_url = "/" . $arr_uri[1] . "/";
        //var_dump($nova_url); die();
        Site::$slim->redirect($nova_url, 301);
    }
}

#
# logica-de-programacao/basico
#
function redirecionar_logica_basico($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'logica-de-programacao' && $arr_uri[2] == 'basico') {
        $nova_url = "/" . $arr_uri[1] . "/";
        //var_dump($nova_url); die();
        Site::$slim->redirect($nova_url, 301);
    }
}

#
# linux/cookbook
#
function redirecionar_linux_cookbook($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'linux' && $arr_uri[2] == 'cookbook') {
        $nova_url = "/" . $arr_uri[1] . "/instalando-" . $arr_uri[3] . "/";
        //var_dump($nova_url); die();
        Site::$slim->redirect($nova_url, 301);
    }
}

#
# javascript/refs
#
function redirecionar_javascript_refs($uri) {
    $arr_uri = explode('/', $uri);
    if ($arr_uri[1] == 'javascript' && $arr_uri[2] == 'refs') {
        $nova_url = "/" . $arr_uri[1] . "/". $arr_uri[3] . "/";
        //var_dump($nova_url); die();
        Site::$slim->redirect($nova_url, 301);
    }
}

#
# tenta o mapa de redirecionamento...
#
function redirecionar_pelo_mapa($uri) {
    $map = mapa();

    # a uri solicitada está mapeada ?
    if (array_key_exists($uri, $map)) {
        $nova_url = $map[$uri];
        //var_dump($nova_url); die();
    }

}

#
# mapeamento
#
function mapa() {
    return array(
        "/urls.php/"                => "/",
        "/core/views/"              => "/",
        "/node_modules/.env/"       => "/",
        "/node_modules/"            => "/",
        "/foo/"                     => "/",
        "/fulia/"                   => "/",
        "/furia/"                   => "/",
        "/old/"                     => "/",
        "/fulia/index.php/"         => "/",
        "/google9a3a1fb0a47d86dd/"  => "/",
        "/vagrant.md/"              => "/",
        "/views/frm-feedback.php/"  => "/",
        "/views/js-rodape.php/"     => "/",

        "/blog/2015/10/07/aprenda-a-programar-do-zero.html/" => "/blog",
        "/flavio-alexandre-micheletti.php/"     => "https://flaviomicheletti.github.io/",
        "/flavio-alexandre-micheletti.html/"    => "https://flaviomicheletti.github.io/",
        "/tcc-flavio-alexandre-micheletti.pdf/" => "https://flaviomicheletti.github.io/tcc-flavio-alexandre-micheletti.pdf",
        "/sitemap.xml/"            => "/",
        "/schemas/sitemap0-9.xml/" => "/",
        "/schemas/sitemap.xml/"    => "/",
        "schemas/sitemap.xml/"     => "/",
        "/schemas/"                => "/",
        "/mapa-do-site/"           => "/",
        "/privilegiometro/"        => "http://privilegiometro.devfuria.com.br/",

        "/cursos/logica-de-programacao-aliada-a-testes-unitarios-edicao-02-2018/" => "/cursos/logica-de-programacao-aliada-a-testes-unitarios-1edicao/",

        "/js/"               => "/javascript/",
        "/js/index.php/"     => "/javascript/",
        "/js/imagens/"       => "/javascript/",
        "/javascript/forms/" => "/javascript/",
        "/javascript/refs/"  => "/javascript/",
        "/javascript/bibliotecas/"  => "/javascript/",
        "/javascript/refatoracao-codigo-limpo/index.html/" => "/javascript/",
        "/javascript/refatoracao-codigo-limpo/"            => "/javascript/",
        "/javascript/preparando-o-terreno/"       => "/javascript/iniciando-com-javascript/",
        "/javascript/numeros-randomicos/"         => "/javascript/numeros-aleatorios/",
        "/javascript/backbone-hello-world/"       => "/javascript/backbone-introducao/",
        "/javascript/dom-add/"                    => "/javascript/dom/",
        "/javascript/getelementbyname/"           => "/javascript/dom-getelementsbyname/",
        "/javascript/dom-getelementbyname/"       => "/javascript/dom-getelementsbyname/",
        "/javascript/refs/getelementbyname/"      => "/javascript/dom-getelementsbyname/",
        "/javascript/getelementbyclassname/"      => "/javascript/dom-getelementsbyclassname/",
        "/javascript/dom-getelementbyclassname/"  => "/javascript/dom-getelementsbyclassname/",
        "/javascript/refs/onclick/"               => "/javascript/",
        "/javascript/refs/queryselectorall/"      => "/javascript/dom-queryselectorall/",
        "/javascript/queryselectorall/"           => "/javascript/dom-queryselectorall/",
        "/javascript/refs/getelementbytagname/"   => "/javascript/dom-getelementsbytagname/",
        "/javascript/getelementbytagname/"        => "/javascript/dom-getelementsbytagname/",
        "/javascript/getelementbyid/"             => "/javascript/dom-getelementbyid/",
        "/javascript/refs/getelementbyid/"        => "/javascript/dom-getelementbyid/",
        "/javascript/refs/dom-add/"               => "/javascript/dom-append-child/",
        "/javascript/refs/dom-create-element/"    => "/javascript/dom-create-element/",
        "/javascript/refs/dom-remove/"            => "/javascript/dom-remove-child/",
        "/javascript/global-g/"                   => "/javascript/referencia-pratica-sobre-a-opcao-global-g/",
        "/javascript/dom-remove/"                 => "/javascript/dom-remove-child/",
        "/javascript/ajax-php/"                   => "/javascript/ajax-php-jquery/",

        "/javascript/forms/textbox-password-textarea/" => "/javascript/manipulando-caixas-de-texto-com-javascript/",
        "/javascript/forms/checkbox-checked/"          => "/javascript/manipulando-checkboxes-com-javascript/",
        "/javascript/forms/input-radio-button/"        => "/javascript/manipulando-radios-buttons-com-javascript/",
        "/js/basico/input-radio-button/"               => "/javascript/manipulando-radios-buttons-com-javascript/",
        "/javascript/manipulando-radios/"              => "/javascript/manipulando-radios-buttons-com-javascript/",
        "/javascript/manipulando-combobox/"            => "/javascript/manipulando-combobox-select-com-javascript/",
        "/javascript/forms/select-combobox/"           => "/javascript/manipulando-combobox-select-com-javascript/",
        "/js/basico/select-combobox/"                  => "/javascript/manipulando-combobox-select-com-javascript/",

        "/javascript/node.js/"                                  => "/node.js/",
        "/javascript/node.js/ns-02-baby-steps/"                 => "/node.js/learnyounode-02-baby-steps/",
        "/javascript/node.js/ns-03-my-first-io/"                => "/node.js/learnyounode-03-my-first-io/",
        "/javascript/node.js/shouldjs/"                         => "/node.js/shouldjs/",
        "/javascript/node.js/modulos/"                          => "/node.js/modulos/",

        "/javascript/node.js/ns-learyounode/"                   => "/node.js/introducao-ao-learnyounode/",
        "/javascript/node.js/expressjs-introducao/"             => "/node.js/introducao-ao-framework-express-js/",
        "/javascript/node.js/expressjs-rotas-routing/"          => "/node.js/o-basico-sobre-rotas-no-express-js/",
        "/javascript/node.js/expressjs-jade/"                   => "/node.js/expressjs-jade/",
        "/javascript/node.js/mocha-configurando-repositorio/"   => "/node.js/configurando-repositorio-git-para-trabalhar-com-mocha/",
        "/node.js/mocha-teste-seu-javascript/"                  => "/node.js/testando-javascript-com-o-mocha/",
        "/javascript/mocha-teste-seu-javascript/"               => "/node.js/testando-javascript-com-o-mocha/",
        "/javascript/node.js/mocha-teste-seu-javascript/"       => "/node.js/testando-javascript-com-o-mocha/",
        "/javascript/node.js/nodejs-01-hello-world/"            => "/node.js/learnyounode-01-hello-world/",
        "/javascript/node.js/nodejs-02-baby-steps/"             => "/node.js/learnyounode-02-baby-steps/",
        "/javascript/node.js/nodejs-03-my-first-io/"            => "/node.js/learnyounode-03-my-first-io/",
        "/javascript/node.js/nodejs-04-my-first-async-io/"      => "/node.js/learnyounode-04-my-first-async-io/",
        "/javascript/node.js/nodejs-05-filtered-ls/"            => "/node.js/learnyounode-05-filtered-ls/",
        "/javascript/node.js/programando-com-node-utils-merge/" => "/node.js/explorando-a-minuscula-biblioteca-utils-merge/",
        "/node.js/templates-engine-tutorial-jade/"              => "/node.js/tutorial-sobre-o-template-jade-node-express/",
        "/javascript/node.js/templates-engine-tutorial-jade/"   => "/node.js/tutorial-sobre-o-template-jade-node-express/",
        "/javascript/node.js/simples-assert-com-nodejs/"        => "/node.js/simples-assert-com-nodejs/",

        "/javascript/backbone/"                                 => "/backbone/",
        "/javascript/backbone-introducao/"                      => "/backbone/introducao/",
        "/javascript/backbone-views/"                           => "/backbone/views/",
        "/javascript/backbone-views-templates/"                 => "/backbone/views-templates/",
        "/javascript/backbone-views-eventos/"                   => "/backbone/views-eventos/",
        "/javascript/backbone-views-exemplos/"                  => "/backbone/views-exemplos/",
        "/javascript/backbone-models/"                          => "/backbone/models/",
        "/javascript/backbone-models-eventos/"                  => "/backbone/models-eventos/",
        "/javascript/backbone-models-views/"                    => "/backbone/models-views",
        "/javascript/backbone-collections/"                     => "/backbone/collections/",
        "/javascript/backbone-collections-eventos/"             => "/backbone/collections-eventos/",
        "/javascript/backbone-collections-views/"               => "/backbone/collections-views/",
        "/javascript/backbone-sincronizando-models/"            => "/backbone/sincronizando-models/",
        "/javascript/backbone-sincronizando-collections/"       => "/backbone/sincronizando-collections/",
        "/javascript/backbone-sync/"                            => "/backbone/sync/",
        "/javascript/backbone-router/"                          => "/backbone/router/",
        "/javascript/backbone-exemplo-01/"                      => "/backbone/exemplo-01/",
        "/javascript/backbone-exemplo-01/backbone.html/"        => "/backbone/exemplo-01/",
        "/javascript/backbone-exemplo-02/"                      => "/backbone/exemplo-02/",
        "/javascript/backbone-exemplo-03/"                      => "/backbone/exemplo-03/",
        "/javascript/backbone-exemplo-04/"                      => "/backbone/exemplo-04/",
        "/javascript/backbone-exemplo-05/"                      => "/backbone/exemplo-05/",
        "/javascript/backbone-exemplo-06/"                      => "/backbone/exemplo-06/",
        "/javascript/backbone-exemplo-07/"                      => "/backbone/exemplo-07/",

        "/js/math-random-numero-randomico-em-javascript/"            => "/javascript/numeros-aleatorios/",
        "/js/math-random-numero-randomico-em-javascript/index.php/"  => "/javascript/numeros-aleatorios/",
        "/js/window-object/"                    => "/javascript/refs/objeto-global/",
        "/js/window-object-global/"             => "/javascript/refs/objeto-global/",
        "/js/basico/"                           => "/javascript/",
        "/js/basico/draft/"                     => "/javascript/",
        "/js/basico/draft/draft/"               => "/javascript/",
        "/js/basico/intro/"                     => "/javascript/iniciando-com-javascript/",
        "/js/basico/intro/index.php/"           => "/javascript/iniciando-com-javascript/",
        "/js/basico/intro/materia.mrk/"         => "/javascript/iniciando-com-javascript/",
        "/js/basico/code-lampadas/"             => "/javascript/code-lampada/",
        "/js/basico/code-lampadas-refatorando/" => "/javascript/code-lampada/",
        "/js/basico/debugando/"                 => "/javascript/debugando/",

        "/js/canvas/?/"                                  => "/html-canvas/",
        "/js/canvas/aprendendo-canvas-introducao/"       => "/html-canvas/introducao-ao-canvas/",
        "/javascript/canvas/introducao/"                 => "/html-canvas/introducao-ao-canvas/",
        "/js/canvas/lineTo-moveTo/"                      => "/html-canvas/desenhando-linhas-lineto-moveto/",
        "/javascript/canvas/lineto-moveto/"              => "/html-canvas/desenhando-linhas-lineto-moveto/",
        "/js/canvas/line-width/"                         => "/html-canvas/tamanho-das-linhas-linewidth/",
        "/javascript/canvas/line-width/"                 => "/html-canvas/tamanho-das-linhas-linewidth/",
        "/javascript/canvas/linejoin-miter-round-bevel/" => "/html-canvas/juncao-das-linhas-linejoin-miter-round-bevel/",
        "/javascript/canvas/linecap-butt-round-square/"  => "/html-canvas/limite-das-linhas-linecap-butt-round-square/",
        "/js/canvas/paths/"                              => "/html-canvas/paths-caminhos/",
        "/javascript/canvas/paths/"                      => "/html-canvas/paths-caminhos/",
        "/js/canvas/rect-strokeRect-fillRect/"           => "/html-canvas/desenhando-retangulos/",
        "/javascript/canvas/rect-strokeRect-fillRect/"   => "/html-canvas/desenhando-retangulos/",
        "/javascript/canvas/rect-strokerect-fillrect/"   => "/html-canvas/desenhando-retangulos/",
        "/js/canvas/canvas-linhas-rando-coloridas/"      => "/html-canvas/exemplo-linhas-randomicas/",
        "/javascript/canvas/col-linhas-rando/"           => "/html-canvas/exemplo-linhas-randomicas/",
        "/js/canvas/canvas-grid/"                        => "/html-canvas/exemplo-grid-lines/",
        "/javascript/canvas/col-linhas-grade/"           => "/html-canvas/exemplo-grid-lines/",
        "/javascript/canvas/col-retangulos/"             => "/html-canvas/exemplo-retangulos-randomicos/",


        "/html/"                                            => "/html-css/",
        "/html-css/html5/"                                  => "/html-css/",
        "/html-css/dtd-doctype/"                            => "/html-css/",
        "/html-css/historia-html/"                          => "/html-css/introducao-html/",
        "/html-css/historia-html/?/"                        => "/html-css/introducao-html/",
        "/html-css/basico/semantica/"                       => "/html-css/",
        "/html-css/basico/semantica/materia.mrk/"           => "/html-css/",
        "/html-css/basico/html-e-css-intro/p_img_d.html/"   => "/html-css/",
        "/html-css/float/"                                  => "/html-css/",
        "/html-css/imagens/"                                => "/html-css/",
        "/html-css/basico/"                                 => "/html-css/",
        "/html-css/basico/?/"                               => "/html-css/",
        "/html-css/basico/index.php/"                       => "/html-css/",
        "/html-css/basico/reset-css/"                       => "/html-css/",
        "/html-css/basico/validando-html-e-css/code1.html/" => "/html-css/",
        "/html-css/basico/validando-html-e-css/materia.mrk/"=> "/html-css/",
        "/html-css/basico/formularios-web/"                 => "/html-css/introducao-formularios-web/",
        "/html-css/basico/formularios-web/?/"               => "/html-css/introducao-formularios-web/",
        "/html-css/formularios/intro-formularios-web/"      => "/html-css/introducao-formularios-web/",
        "/html-css/formularios-web/"                        => "/html-css/introducao-formularios-web/",
        "/html-css/basico/intro/"                           => "/html-css/introducao-html/",
        "/html-css/basico/intro/?/"                         => "/html-css/introducao-html/",
        "/html-css/basico/html-intro/?/"                    => "/html-css/introducao-html/",
        "/html-css/basico/html-intro/"                      => "/html-css/introducao-html/",
        "/html-css/basico/html-e-css-intro/"                => "/html-css/",
        "/html-css/basico/semantica/?/"                     => "/html-css/introducao-html/",
        "/html-css/basico/onde-tudo-comecou/"               => "/html-css/introducao-html/",
        "/html-css/basico/primeiro-html/"                   => "/html-css/primeiro-html/",
        "/html-css/basico/css-intro/"                       => "/html-css/introducao-css/",
        "/html-css/basico/elementos-inline-block-level/"    => "/html-css/elementos-inline-block-level/",
        "/html-css/basico/primeiro-html/slide-primeiro-html.odp/"       => "/html-css/primeiro-html/",
        "/html-css/basico/primeiro-html/"                               => "/html-css/primeiro-html/",
        "/html-css/basico/primeiro-html/materia.md/"                    => "/html-css/primeiro-html/",
        "/html-css/basico/primeiro-html/materia.mrk/"                   => "/html-css/primeiro-html/",
        "/html-css/basico/primeiro-html/1080P/"                         => "/html-css/primeiro-html/",
        "/html-css/basico/primeiro-html/720P/"                          => "/html-css/primeiro-html/",
        "/%3Cb%3Ehtml%3C/b%3E-css/formularios/combo%3Cb%3Ebox%3C/b%3E/" => "/html-css/formularios/combobox/",

        "/c/rodando-os-testes/rodando-os-testes/"           => "/c/rodando-os-testes/",
        "/c/entendendo-o-assert-c/entendendo-o-assert-c/"   => "/c/entendendo-o-assert-c/",

        "/logica"                                           => "/logica-de-programacao/",
        "/logica/"                                          => "/logica-de-programacao/",
        "/logica-de-/"                                      => "/logica-de-programacao/",
        "/logica/basico/intro"                              => "/logica-de-programacao/",
        "/logica/basico/intro/"                             => "/logica-de-programacao/",
        "/logica/basico/tdd/"                               => "/logica-de-programacao/",
        "/logica/basico/exercicio02/"                       => "/logica-de-programacao/",
        "/logica/basico/exercicio05/"                       => "/logica-de-programacao/",
        "/logica/basico/exercicio06/"                       => "/logica-de-programacao/",
        "/logica/basico/exercicio08/"                       => "/logica-de-programacao/",
        "/logica/basico/exercicio09/"                       => "/logica-de-programacao/",
        "/logica-de-p/"                                     => "/logica-de-programacao/",
        "/logica-de-programacao/o-que-e-tdd/"               => "/tdd/",
        "/logica-de-programacao/entendendo-o-assert-c/"     => "/c/rodando-os-testes/",
        "/logica-de-programacao/como-compilar-no-linux/"    => "/logica-de-programacao/",
        "/logica-de-programacao/intro/"                     => "/logica-de-programacao/",

        "/logica-de-programacao/eleitores/"                 => "/logica-de-programacao/votos-em-relacao-ao-total-de-eleitores/",
        "/logica-de-programacao/c-eleitores/"               => "/logica-de-programacao/votos-em-relacao-ao-total-de-eleitores/",
        "/logica-de-programacao/custo-carro/"               => "/logica-de-programacao/custo-de-fabricacao-de-um-carro/",
        "/logica-de-programacao/c-custo-carro/"             => "/logica-de-programacao/custo-de-fabricacao-de-um-carro/",
        "/logica-de-programacao/dias-n-meses/"              => "/logica-de-programacao/descobrir-os-dias-de-n-meses/",
        "/logica-de-programacao/c-dias-n-meses/"            => "/logica-de-programacao/",
        "/logica-de-programacao/antecessor-sucessor/"       => "/logica-de-programacao/antecessor-e-sucessor-de-um-numero-qualquer/",
        "/logica-de-programacao/media-simples/"             => "/logica-de-programacao/media-simples-de-3-numeros/",
        "/logica-de-programacao/c-duas-variaveis/"          => "/logica-de-programacao/trocar-o-valor-de-duas-variaveis/",
        "/logica-de-programacao/duas-variaveis/"            => "/logica-de-programacao/trocar-o-valor-de-duas-variaveis/",
        "/logica-de-programacao/duas-variaveis-ponteiros/"  => "/logica-de-programacao/trocar-o-valor-de-duas-variaveis-utilizando-ponteiros/",
        "/logica-de-programacao/dobro/"                     => "/logica-de-programacao/o-dobro-de-um-numero-qualquer/",
        "/logica-de-programacao/dobro/?/"                   => "/logica-de-programacao/o-dobro-de-um-numero-qualquer/",
        "/logica-de-programacao/dobro-func/?/"              => "/logica-de-programacao/o-dobro-de-um-numero-qualquer/",
        "/logica-de-programacao/dobro-func/"                => "/logica-de-programacao/o-dobro-de-um-numero-qualquer/",
        "/logica-de-programacao/c-dobro-func/"              => "/logica-de-programacao/o-dobro-de-um-numero-qualquer/",
        "/logica-de-programacao/c-dobro/"                   => "/logica-de-programacao/o-dobro-de-um-numero-qualquer/",
        "/logica-de-programacao/c-celsius-fahrenheit/"      => "/logica-de-programacao/celsius-fahrenheit/",
        "/logica-de-programacao/c-equacao-2grau/"           => "/logica-de-programacao/equacao-2grau/",
        "/logica-de-programacao/c-juros-simples/"           => "/logica-de-programacao/juros-simples/",
        "/logica-de-programacao/c-media-simples/"           => "/logica-de-programacao/media-simples/",
        "/logica-de-programacao/c-maior-que-dez/"           => "/logica-de-programacao/maior-que-dez/",
        "/logica-de-programacao/c-mmc/"                     => "/logica-de-programacao/mmc/",
        "/logica-de-programacao/c-mdc/"                     => "/logica-de-programacao/mdc/",
        "/logica-de-programacao/c-par-impar/"               => "/logica-de-programacao/par-impar/",
        "/logica-de-programacao/par/"                       => "/logica-de-programacao/par-impar/",
        "/logica-de-programacao/c-positivo/"                => "/logica-de-programacao/positivo/",
        "/logica-de-programacao/c-primo/"                   => "/logica-de-programacao/primo/",
        "/logica-de-programacao/c-operacoes-mat/"           => "/logica-de-programacao/operacoes-mat/",
        "/logica-de-programacao/salario-reajuste/"          => "/logica-de-programacao/reajustando-o-salario/",
        "/logica-de-programacao/c-salario-reajuste/"        => "/logica-de-programacao/reajustando-o-salario/",
        "/logica-de-programacao/c-soma-digitos/"            => "/logica-de-programacao/soma-digitos/",
        "/logica-de-programacao/c-strings-comparar/"        => "/logica-de-programacao/strings-comparar/",
        "/logica-de-programacao/c-strings-contar/"          => "/logica-de-programacao/strings-contar/",
        "/logica-de-programacao/c-strings-concatenar/"      => "/logica-de-programacao/strings-concatenar/",
        "/logica-de-programacao/c-strings-contar-vogais/"   => "/logica-de-programacao/strings-contar-vogais/",
        "/logica-de-programacao/c-strings-reverse/"         => "/logica-de-programacao/strings-reverse/",
        "/logica-de-programacao/c-vetor-simples/"           => "/logica-de-programacao/vetor-simples/",
        "/logica-de-programacao/c-vetor-copia/"             => "/logica-de-programacao/vetor-copia/",
        "/logica-de-programacao/c-vetor-maior-menor-indice/"=> "/logica-de-programacao/vetor-maior-menor-indice/",
        "/logica-de-programacao/c-vetor-soma/"              => "/logica-de-programacao/vetor-soma/",
        "/logica-de-programacao/c-vetor-valores-repetidos/" => "/logica-de-programacao/vetor-valores-repetidos/",
        "/logica-de-programacao/c-positivo/"                => "/logica-de-programacao/positivo/",
        "/logica-de-programacao/c-vetor-valores-repetidos/" => "/logica-de-programacao/vetor-valores-repetidos/",
        "/logica-de-programacao/calc-dobro/"                => "/logica-de-programacao/dobro-func/",
        "/logica-de-programacao/cpp-area-quadra-cubo/"      => "/logica-de-programacao/area-quadra-cubo/",
        "/logica-de-programacao/cpp-calc-dobro/"            => "/logica-de-programacao/dobro-oop/",
        "/logica-de-programacao/cpp-antecessor-sucessor/"   => "/logica-de-programacao/antecessor-sucessor/",
        "/logica-de-programacao/cpp-calc-dobro/"            => "/logica-de-programacao/calc-dobro/",
        "/logica-de-programacao/cpp-triangulo/"             => "/logica-de-programacao/calc-dobro/",
        "/logica-de-programacao/cpp-juros-simples/"         => "/logica-de-programacao/juros-simples/",
        "/logica-de-programacao/exemplos/"                  => "/logica-de-programacao/",
        "/logica-de-programacao/exemplos-na-linguagem/"     => "/logica-de-programacao/",
        "/logica-de-programacao/introducao-linguagem-c/"    => "/c/",
        "/logica-de-programacao/c-antecessor-sucessor/"     => "/logica-de-programacao/antecessor-sucessor/",

        "/misc/cgi-common-gateway-interface/&amp;sa=U&amp;ved=0ahUKEwj9u5bH1v7KAhUI8j4KHQbdCnM4UBAWCD0wDw&amp;usg=AFQjCNFyC8eqH68VR_5sxUleU5NEh4ltNQ" => "/misc/cgi-common-gateway-interface/",
        "/misc/cgi-common-gateway-interface/&amp;sa=U&amp;ved=0ahUKEwjLx7Xo1ubKAhVCxxoKHT3LCqs4UBAWCD0wDw&amp;usg=AFQjCNFyC8eqH68VR_5sxUleU5NEh4ltNQ" => "/misc/cgi-common-gateway-interface/",

        "/mysql/"                                   => "/sql/",
        "/mysql-sql/"                               => "/sql/",
        "/mysql-sql/?/"                             => "/sql/",
        "/mysql-sql/intro/"                         => "/sql/",
        "/mysql/basico/?/"                          => "/sql/",
        "/mysql/basico/intro/?/"                    => "/sql/",
        "/mysql/basico/intro/"                      => "/sql/",
        "/mysql-sql/basico/intro/"                  => "/sql/",
        "/mysql-sql/basico/criando-base-tabela/"    => "/sql/",
        "/mysql-sql/basico/primeiros-passos-mysql/" => "/sql/",
        "/mysql-sql/basico/crud/"                   => "/sql/mysql-crud/",
        "/sql/mysql-erro-1064/"                     => "/sql/mysql-ler-mensagens-erro/",
        "/sql/mysql-load-data-local-infile/"        => "/sql/populando-tabela-a-partir-de-um-arquivo-de-texto-no-mysql/",
        "/sql/mysql/"                               => "/sql/mysql-criando-tabelas/",

        "/php/refs/"                                => "/php",
        "/php/refs/require/"                        => "/php/",
        "/php/refs/array_pop/"                      => "/php/",
        "/php/refs/funcoes/"                        => "/php/funcoes/",
        "/php/refs/if-else/"                        => "/php/expressoes-condicionais/",
        "/php/refs/in_array/"                       => "/php/",
        "/php/forms/"                               => "/php",
        "/php/basico/"                              => "/php",
        "/php/basico/new"                           => "/php",
        "/php/basico/new/"                          => "/php",
        "/php/basico/draft"                         => "/php",
        "/php/basico/draft/"                        => "/php",
        "/php/basico/arrays-vetores-matrizes/"      => "/php/criando-iterando-um-array/",
        "/php/basico/boas-praticas/"                => "/php/",
        "/php/basico/pe-na-jaca/"                   => "/php/",
        "/php/basico/antes-de-enfiar-o-pe-na-jaca/" => "/php/",
        "/php/basico/debugando/"                    => "/php/debugando-codigo/",
        "/php/basico/debugando/materia.md/"         => "/php/debugando-codigo/",
        "/php/basico/checkbox-checked/"             => "/php/manipulando-checkboxes-com-php/",
        "/php/labs/checkbox/"                       => "/php/labs/checkbox/form.php",
        "/php/basico/textbox-password-textarea/"    => "/php/manipulando-os-controles-text-password-e-textarea/",
        "/php/labs/textbox/"                        => "/php/labs/textbox/form.php",
        "/php/basico/select-multiple/"              => "/php/manipulando-listbox-com-php/",
        "/php/basico/input-radio-button/"           => "/php/manipulando-radio-button-com-php/",
        "/php/basico/enviando-dados-via-get-post/"  => "/php/enviando-dados-via-get-post/",
        "/php/basico/recebendo-dados-via-get-post/" => "/php/recebendo-dados-via-get-post/",
        "/php/basico/instalando-o-ambiente/"        => "/php/",
        "/php/basico/metodo-http-get-post/"         => "/php/enviando-dados-via-get-post/",
        "/php/basico/combobox-input-form-select/"   => "/php/manipulando-combobox-com-php/",
        "/php/basico/um-bom-comeco/"                => "/php",
        "/php/basico/estudos-de-logica-1-ao-5/"     => "/logica-de-programacao/",
        "/php/basico/estudos-de-logica-6-ao-10/"    => "/logica-de-programacao/",
        "/php/basico/logica-de-programacao/"        => "/logica-de-programacao/",
        "/php/forms/checkbox/-"                     => "/php/manipulando-checkboxes-com-php/",
        "/php/metodo-http-get-post/index.html/"     => "/php/como-funcionam-os-metodos-get-e-post/",
        "/php/metodo-http-get-post/"                => "/php/como-funcionam-os-metodos-get-e-post/",
        "/twig.md/"                                 => "/php/",
        "/php/arrays-vetores-matrizes/"             => "/php/criando-e-iterando-um-array/",
        "/php/arrays-funcoes-basicas/"              => "/php/criando-e-iterando-um-array/",
        "/php/criando-iterando-um-array/"           => "/php/criando-e-iterando-um-array/",
        "/php/forms/radio-button/"                  => "/php/manipulando-radio-button-com-php/",
        "/php/manipulando-radio/"                   => "/php/manipulando-radio-button-com-php/",
        "/php/forms/select-multiple/"               => "/php/manipulando-listbox-com-php/",
        "/php/forms/textbox-password-textarea/"     => "/php/manipulando-os-controles-text-password-e-textarea/",
        "/php/forms/combobox/"                      => "/php/manipulando-combobox-com-php/",
        "/php/manipulando-combobox/"                 => "/php/manipulando-combobox-com-php/",
        "/php/forms/checkbox/"                      => "/php/manipulando-checkboxes-com-php/",
        "/php/forms/enviando-dados-via-get-post/"   => "/php/enviando-dados-via-get-post/",
        "/php/forms/recebendo-dados-via-get-post/"  => "/php/recebendo-dados-via-get-post/",
        "/php/preg-match-all/"                      => "/php/referencia-da-funcao-preg-match-all/",
        "/php/preg-match-all-basico//"              => "/php/referencia-da-funcao-preg-match-all/",
        "/php/preg-match-all-basico/"               => "/php/o-basico-sobre-a-funcao-preg-match-all/",
        "/php/o-basico-sobre-a-fun%C3%A7%C3%A3o-preg-match/"  => "/php/o-basico-sobre-a-funcao-preg-match/",
        "/php/o-basico-sobre-a-funcao-preg/"                  => "/php/o-basico-sobre-a-funcao-preg-match/",

        "/php/preg-match-basico/"                             => "/php/o-basico-sobre-a-funcao-preg-match/",
        "/php/oop-primeiro-contato/"                => "/php",
        "/php/oop-visibilidade/"                    => "/php",
        "/php/php-slim-framework/"                  => "/php/hello-world-com-slimframework/",
        "/php/phptherightway/"                      => "/php/hello-world-com-slimframework/",
        "/php/twig/"                                => "/php/",
        "/php/debugando/"                           => "/php/debugando-codigo/",
        "/php/instalando-o-ambiente/"               => "/php/",

        "/python/django-error/"       => "/python/",
        "/python/flas/"               => "/python/flask-apache/",
        "/python/built-in/list/"      => "/python/built-in-list/",
        "/python/built-in/enumerate/" => "/python/built-in-enumerate/",
        "/python/built-in/repr/"      => "/python/built-in-repr/",
        "/python/built-in/zip/"       => "/python/built-in-zip/",
        "/python/os.path/"            => "/python/os-path/",
        "/python/sequencias-fatiamento/sequencias-fatiamento/"  => "/python/sequencias-fatiamento/",
        "/python/saidas-output/saidas-output/"                  => "/python/saidas-output/",

        "/regexp/"                 => "/regex/",
        "/regexp//"                => "/regex/",
        "/regexp/index.php/"       => "/regex/",
        "/regexp/?curso/"          => "/regex/",
        "/regexp/basico/"          => "/regex/",
        "/regexp/basico/draft/"    => "/regex/",
        "/regexp/basico/intro/"    => "/regex/",
        "/regex/relacao-completa/" => "/regex/",

        "/regexp/basico/pattern-test/"                               => "/javascript/refs/pattern-test/",
        "/regexp/basico/ponto/"                                      => "/regex/metacaractere-ponto/",
        "/regexp/basico/string-match/"                               => "/javascript/refs/string-match/",
        "/regexp/basico/string-match/"                               => "/javascript/refs/string-match/",
        "/regexp/basico/varios-resultados-match-test-exec/"          => "/javascript/refs/global-g/",
        "/regexp/basico/varios-resultados-preg-match-all/index.php/" => "/php/preg-match-all-basico/",
        "/regexp/basico/varios-resultados-preg-match-all/index.php/" => "/php/preg-match-all-basico/",
        "/regexp/basico/varios-resultados-preg-match-all"            => "/php/preg-match-all-basico/",
        "/regexp/basico/varios-resultados-preg-match-all/"           => "/php/preg-match-all-basico/",
        "/regexp/basico/preg-match-all/"                             => "/php/preg-match-all-basico/",

        "/script-para-onde-envio-os-dados.php/"                  => "/php/",
        "/seguranca-da-informacao/owasp-topten-2010-introducao/" => "/seguranca-da-informacao/owasp-topten-2010/",
        "/seguranca-da-informacao/owasp-topten-/"                 => "/seguranca-da-informacao/owasp-topten-2010/",

        "/tdd/tdd-test-driven-development/"            => "/logica-de-programacao/tdd-junto-com-logica-assim-tao-cedo/",
        "/tdd/tdd-test-driven-development/index.html/" => "/logica-de-programacao/tdd-junto-com-logica-assim-tao-cedo/",
        "/tdd/exemplo-tdd-antecessor-sucessor/"     => "/tdd/",
        "/tdd/exemplo-tdd-area-quadra-oop/"         => "/tdd/",
        "/tdd/exemplo-tdd-area-quadrada/"           => "/tdd/",
        "/tdd/exemplo-tdd-area-quadra/"             => "/tdd/",
        "/tdd/exemplo-tdd-custo-carro/"             => "/tdd/",
        "/tdd/exemplo-tdd-dias-n-meses/"            => "/tdd/",
        "/tdd/exemplo-tdd-duas-variaveis/"          => "/tdd/",
        "/tdd/exemplo-tdd-eleitores/"               => "/tdd/",
        "/tdd/exemplo-tdd-equacao-2grau/"           => "/tdd/",
        "/tdd/exemplo-tdd-maior-que-dez/"           => "/tdd/",
        "/tdd/exemplo-tdd-media-simples/"           => "/tdd/",
        "/tdd/exemplo-tdd-operacoes-mat/"           => "/tdd/",
        "/tdd/exemplo-tdd-positivo/"                => "/tdd/",
        "/tdd/exemplo-tdd-primo/"                   => "/tdd/",
        "/tdd/exemplo-tdd-salario-reajuste/"        => "/tdd/",
        "/tdd/exemplo-tdd-antecessor-sucessor-oop/" => "/tdd/",
        "/tdd/exemplo-tdd-celsius-fahrenheit/"      => "/tdd/",

        "/git/iniciando-com-git/" => "/git/",
        "/git/nao-pedir-senha/"   => "/git/netrc-nao-pedir-senha/",
        "/git/os-3-estados/"      => "/git/",
        "/git/git-rm/"            => "/git/",
        "/git/git-reset/"         => "/git/",

        "/linux/resetar-senha%20de-mysql/"            => "/linux",
        "/entendendo-e-usando-permissoes-no-linux.md/"=> "/linux",
        "/linux/cookbook/"                            => "/linux/receitas-de-instalacao-de-softwares-no-linux/",
        "/linux/cookbook/recordmydesktop/"            => "/linux/instalando-gtk-recordmydesktop/",
        "/linux/cookbook/recordmydesktop/"            => "/linux/instalando-gtk-recordmydesktop/",
        "/linux/reiniciar-servidor-apache/"           => "/linux/apache-como-reiniciar-servidor-apache/",
        "/linux/reiniciar-servidor-apache/"           => "/linux/apache-como-reiniciar-servidor-apache/",
        "/linux/insta/"                               => "/linux/instalando-wodim/",
        "/linux/instalando-kino/instalando-kino/"     => "/linux/instalando-kino/",
        "/linux/instalando-wine/instalando-wine/"     => "/linux/instalando-wine/",
        "/linux/index-receitas-instalacoes/"          => "/linux/",
        "/linux/receitas-de-instalacao-de-softwares-no-linux/" => "/linux/",
    );
}
