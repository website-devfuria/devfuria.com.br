<?php


#
# Carrega um apágina
#
function carregar($page) {
    // var_dump($page); //die();

    $md = file_get_contents($page->path_md);
    // var_dump($md); die();

    $parser = new Mni\FrontYAML\Parser();
    $document = $parser->parse($md);

    $page->front = $document->getYAML();

    $content = $document->getContent();
    // var_dump($page); //die();
    // echo $content;

    if (isset($page->front['layout'])) {

        #
        # Ao criar um novo layout tenha a certeza de incluir ele aqui...
        #
        switch ($page->front['layout']) {
            case 'secao+toc':
                require('layouts/secao+toc.php');
                break;
            case 'secao':
                require('layouts/secao.php');
                break;
            case 'artigo':
                require('layouts/artigo.php');
                break;
            case 'artigo+toc':
                require('layouts/artigo+toc.php');
                break;
            case 'cursos':
                require('layouts/cursos.php');
                break;
            case 'basico1':
                require('layouts/basico1.php');
                break;
            case 'basico2':
                require('layouts/basico2.php');
                break;
            case 'basico3':
                require('layouts/basico3.php');
                break;
            case 'basico4':
                require('layouts/basico4.php');
                break;
            case 'nulo':
                require('layouts/nulo.php');
                break;
            case 'home':
                require('layouts/home.php');
                break;
            default:
                throw new Exception("Layout não encontrado: " . $page->front['layout']);

        }
    } else {
        #
        # layout padrão
        #
        require('layouts/artigo+menu.php');
    }

}


