<?php

#
# Site
#
class Site {

    static $dominio = "http://www.devfuria.com.br";
    static $title   = "devfuria"; // para substituir títulos ausentes
    static $name; // namespace para logs
    static $author  = "Flávio Alexandre Micheletti";


    static $slim;
    static $path    = [];
    static $url     = [];

    static $uri;

    static $emails  = []; // que receberam notificações

    static $enable_analytics = false;
    static $enable_disqus    = false;

}

#
# veja que as propriedades são todas estáticas, então não precisa instanciar
#

