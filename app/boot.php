<?php


#
# on/off debug: Forçar mostrar erros
#
ini_set('display_errors', 'on');
ini_set('track_errors', 'on');
ini_set('html_errors', 'on');
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);


#
# dependências
#
require dirname(__FILE__) . '/vendor/autoload.php';
require dirname(__FILE__) . '/oop/Site.php';
require dirname(__FILE__) . '/oop/Page.php';
require dirname(__FILE__) . '/menu.php';
require dirname(__FILE__) . '/carregar.php';
require dirname(__FILE__) . '/redirecionar.php';


#
# timezone padrão
#
date_default_timezone_set("America/Sao_Paulo");


#
# Session
#
session_start();

#
# site
#
$site = new Site();

#
# slim
#
$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails'    => true,
]];
$slim = new \Slim\App($config);


#
# path
#
$site->path = array();
$site->path['/']         = dirname(dirname(__FILE__));       # caminho absoluto
$site->path['logs/']     = dirname(__FILE__) . "/logs/";     # dominio.com/logs/
$site->path['includes/'] = dirname(__FILE__) . "/includes/"; # dominio.com/includes/
$site->path['api/']      = dirname(dirname(dirname(__FILE__))) . "/devfuria.subs/api"; #

// if(file_exists($site->path['api/'])) {
//     die('ok');
// }

#
# url
#
$site->url['mailing-list/'] = "/app/mailing-list.php";


#
# usao principalmente para criar um namespace para os logs
#
if (isset($_SERVER["SERVER_ADDR"])) {
    // pega o ip como nome da Site
    $site->name = $_SERVER["SERVER_ADDR"];
} else {
    // nos testes cai aqui
    $site->name = 'sem-nome';
}
//var_dump($site->name); die();



#
# ligar
#
// $site->enable_analytics = true;
// $site->enable_disqus    = true;


#
# email que receberão notificações
#
$site->emails = ["sitedevfuria@gmail.com"];

#
# Representa uma página
#
$page = new Page();




// Get container
$container = $slim->getContainer();

// Register component on container
$container['view'] = function ($container) {

    #
    # local dos templates, debug ativado
    #
    $view = new \Slim\Views\Twig($path_to_templates = "app/templates", ['debug' => true]);

    #
    # base_url()
    #
    $basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container->get('router'), $basePath));

    #
    # objeto pagina
    #
    $view->getEnvironment()->addGlobal("pagina",  'página foi');

    #
    # session
    #
    $view->getEnvironment()->addGlobal("session",  $_SESSION);

    #
    # habilitar debug com dump()
    #
    $view->addExtension(new Twig_Extension_Debug());

    return $view;
};

