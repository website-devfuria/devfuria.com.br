<?php

#
#
#
function menu($capitulo) {
    $dados = menu_dados($capitulo);

    echo '<div class="list-group">';
    foreach ($dados as $key => $value) {
        $class = ($key == $GLOBALS['page']->uri_str) ? "list-group-item active" : "list-group-item" ;
        echo "<a href=\"$key\" class=\"$class\">$value</a>";
    }
    echo '</div>';

}

#
#
#
function menu_secao($capitulo) {

    switch ($capitulo) {

        case 'backbone-intro':
        case 'backbone-exemplos':
            return "backbone";
            break;

        case 'c-intro':
            return "c";
            break;

        case 'git-intro':
        case 'git-artigos':
            return "git";
            break;

        case 'html-intro':
        case 'html-segundo':
        case 'html-aplicando-conhecimento':
        case 'html-elementos-basicos':
        case 'html-estilos-basicos':
        case 'html-conceitos':
        case 'html-tipografia':
        case 'html-divs':
        case 'html-divs-centralizando':
        case 'html-imagens':
        case 'html-layout':
        case 'html-formularios':
            return "html-css-new";
            break;

        case 'html-css-intro':
        case 'html-css-elementos':
        case 'controles-basicos-input':
        case 'controles-basicos-naoinput':
        case 'html-artigos':
            return "html-css";
            break;

        case 'canvas':
        case 'canvas-exemplos':
            return "html-canvas";
            break;

        case 'javascript-comecar':
        case 'javascript-artigos':
        case 'javascript-referencia':
        case 'javascript-dom':
        case 'javascript-ajax':
        case 'javascript-forms':
        case 'javascript-random':
        case 'javascript-regex':
            return "javascript";
            break;

        case 'linux-instalando-nodejs':
        case 'linux-instalando-python':
        case 'linux-instalando-ruby':
        case 'linux-instalando-php':
        case 'linux-instalando-apache':
        case 'linux-instalando-db':
        case 'linux-instalando-browser':
        case 'linux-instalando-editores':
        case 'linux-instalando-utils':
        case 'linux-instalando-audio-som':
        case 'linux-artigos':
        case 'linux-virtualbox':
            return "linux";
            break;

        case 'logica-nivel-0':
        case 'logica-nivel-1':
        case 'logica-nivel-2':
        case 'logica-nivel-3':
        case 'logica-nivel-4-vetores':
        case 'logica-nivel-4-strings':
        case 'logica-nivel-5':
        case 'logica-nivel-6':
        case 'logica-nivel-7':
        case 'logica-nivel-8':
        case 'logica-nivel-9':
            return "logica-de-programacao";
            break;

        case 'learnyounode':
        case 'node-unit-tests':
        case 'node-express':
            return "node.js";
            break;

        case 'php-comecando':
        case 'php-conhecendo-o-inimigo':
        case 'php-http':
        case 'php-formularios':
        case 'php-slimframework':
        case 'php-twig':
        case 'php-regex':
            return "php";
            break;

        case 'python-artigos':
        case 'python-google':
        case 'python-basico':
            return "python";
            break;

        case 'er-intro':
        case 'er-metacaracteres':
            return "regex";
            break;

        case 'seginfo-topten2010':
            return "seguranca-da-informacao";
            break;

        case 'sql-intro':
            return "sql";
            break;

        case 'tdd-exemplos':
            return "tdd";
            break;

        default:
            throw new Exception("Capítulo não encontrado: ". $capitulo);
            break;
    }
}

#
#
#
function menu_arquivo($secao) {
    return Site::$path['/'] . "/$secao/menus.php";
}

#
# ex $capítulo = javascript-comecar, javascript-artigos, etc...
#
function menu_dados($capitulo) {

    # descobrir a seção através do capítulo
    $secao   = menu_secao($capitulo);

    # caminho completo do arquivo de menus da seção escolhida
    $arquivo = menu_arquivo($secao);
    require($arquivo);

    // var_dump($capitulo, $secao, $arquivo);                 # javascript-comecar, javascript, '[path]/javascript/menus.php'
    // var_dump($menu);                                       # $menu vem do arquivo menu de cada seção, é um arrayzão.
    // var_dump($menu[$capitulo][$GLOBALS['page']->uri_str]); # página atual
    // var_dump($menu[$capitulo]);                            # menu específico daquele capítulo

    return $menu[$capitulo];

}

