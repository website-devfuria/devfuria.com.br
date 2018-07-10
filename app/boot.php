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
# slim
#
Site::$slim = new \Slim\Slim();


#
# path
#
Site::$path = array();
Site::$path['/']         = dirname(dirname(__FILE__));       # caminho absoluto
Site::$path['logs/']     = dirname(__FILE__) . "/logs/";     # dominio.com/logs/
Site::$path['includes/'] = dirname(__FILE__) . "/includes/"; # dominio.com/includes/


#
# url
#
Site::$url['mailing-list/'] = "/app/mailing-list.php";


#
# usao principalmente para criar um namespace para os logs
#
if (isset($_SERVER["SERVER_ADDR"])) {
    // pega o ip como nome da Site
    Site::$name = $_SERVER["SERVER_ADDR"];
} else {
    // nos testes cai aqui
    Site::$name = 'sem-nome';
}
//var_dump(Site::$name); die();



#
# ligar/desligar
#
// Site::$enable_analytics = true;
// Site::$enable_disqus    = true;

#
# acesso ao banco de dados
#
function getConnection() {
    // return new PDO('mysql:host=localhost;dbname=db', "user", "pass");
    return new PDO('mysql:host=localhost;dbname=devfuria', "root", "1234");
    // return new PDO('mysql:host=localhost;dbname=conexaod_dev', "conexaod_dev", "alfa9876");
}

#
# email que receberão notificações
#
Site::$emails = ["sitedevfuria@gmail.com"];

#
# Representa uma página
#
$page = new Page();