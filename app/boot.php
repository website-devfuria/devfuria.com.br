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
$site->title  = "devfuria";
$site->author = "Flaǘio Micheletti";

#
# slim
#

$config = ['settings' => [
    'addContentLengthHeader' => false,
    'displayErrorDetails'    => true,
]];

$slim = new \Slim\App($config);

$container = $slim->getContainer();



#
# path
#
$site->path = array();
$site->path['/']         = dirname(dirname(__FILE__));
$site->path['app/']      = $site->path['/'] . "/app";
$site->path['logs/']     = $site->path['app/'] . "/logs";
$site->path['includes/'] = $site->path['app/'] . "/includes";
$site->path['api/']      = dirname($site->path['/']) . "/devfuria.subs/api";
// var_dump($site->path);

// if(file_exists($site->path['api/'])) {
//     die('ok');
// }

#
# url
#
$site->url = array();

# subititue `bas_url()`
$site->url['base']          = $container->get('request')->getUri()->getBasePath();

$site->url['mailing-list/'] = "/app/mailing-list.php";
// var_dump($site->url);


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




// Register component on container
$container['view'] = function ($container) {

    #
    # local dos templates, debug ativado
    #
    $view = new \Slim\Views\Twig($path_to_templates = "app/templates", ['debug' => true]);

    #
    # base_url()
    #
    $site = $GLOBALS['site'];
    $basePath = rtrim(str_ireplace('index.php', "", $site->url['base']));
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

