<?php

namespace oop;

#
# Site
#
class Site {

    public $title   = "devfuria"; // para substituir títulos ausentes
    public $name; // namespace para logs
    public $author  = "Flávio Alexandre Micheletti";


    public $emails  = []; // que receberam notificações

    public $enable_analytics = false;
    public $enable_disqus    = false;


    #
    # Retorna o endereço do layout
    #
    function getLayout($front_layout = "artigo+menu") {

        $site = $GLOBALS['site'];

        $endereco_layout = $site->path->layouts . "/$front_layout.html";

        if (!file_exists($endereco_layout)) {
            throw new \Exception("Layout não encontrado: $front_layout");
        }

        return "layouts/$front_layout.html";
    }
    // $layout = 'layouts/basico1.html';
    // $layout = 'layouts/basico2.html';
    // $layout = 'layouts/basico3.html';
    // $layout = 'layouts/basico4.html';
    // $layout = 'layouts/cursos.html';
    // $layout = 'layouts/artigo+toc.html';
    // $layout = 'layouts/artigo.html';
    // $layout = 'layouts/home.html';
    // $layout = 'layouts/html-01.html';
    // $layout = 'layouts/nulo.html';
    // $layout = 'layouts/secao+toc.html';
    // $layout = 'layouts/secao.html';



}

