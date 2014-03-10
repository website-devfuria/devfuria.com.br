<?php

/**
 * Arquivo Bootstrap
 */
/**
 * Session
 */
session_start();


/**
 * Timezone
 */
date_default_timezone_set('America/Sao_Paulo');

/**
 * Const do sistema
 */
define('DF', true);

/**
 *  Google Analytics
 */
//define('GANALYTICS_ON', true); // liga
define('GANALYTICS_ON', false); // desliga


/**
 * Caminho relativo da raiz do sistema
 */
define('BASE_PATH', dirname(__FILE__));


/**
 * Caminho absoluto para links e imagens
 */
# www.devefuria.com.br
//define('LINKS_PATH', "http://www.devfuria.com.br");
define('LINKS_PATH', "http://localhost/devfuria/www.devfuria.com.br");


/**
 * Pasta das views
 */
define('VIEWS_PATH', "/views/");


/**
 *  Domínio, (não mais) utilizado nos title das páginas
 */
define('DOMINIO', "www.devfuria.com.br");



/**
 * Classes diversas
 */
require (BASE_PATH . "/oop/Core.php");
require (BASE_PATH . "/oop/Head.php");
require (BASE_PATH . "/oop/NavTop.php");
require (BASE_PATH . "/oop/ListaSecao.php");
require (BASE_PATH . "/oop/Paginacao.php");
require (BASE_PATH . "/oop/Materia.php");
require (BASE_PATH . "/oop/Aux.php");
require (BASE_PATH . "/oop/gateways/Paginas.php");


/**
 * Conexão dom DB
 */
$pdo = new PDO($dsn = "mysql:dbname=devfuria_fulia;host=localhost", $user = "root", $pass = "alfa9876");
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$pdo->exec("set names utf8");

/**
 * Variáveis do sistema
 */
$core = new Core();

#
# Setando a lista (array) com todas as páginas do site
#
$model_paginas = new Paginas();
$core->paginas = $core->criaArrayPaginas($model_paginas->getAll());
//var_dump($core->paginas['html-css']);die();

$core->secoes = array(
    Core::SECAO_JS => array(
        "href" => "js",
        "label" => "Javascript"
    ),
    Core::SECAO_HTML => array(
        "href" => "html-css",
        "label" => "HTML & CSS"
    ),
    Core::SECAO_PHP => array(
        "href" => "php",
        "label" => "PHP"
    ),
    Core::SECAO_LOG => array(
        "href" => "logica-de-programacao",
        "label" => "Lógica de Programação"
    ),
    Core::SECAO_MYSQL => array(
        "href" => "mysql-sql",
        "label" => "MySql & SQL"
    ),
    Core::SECAO_ER => array(
        "href" => "regexp",
        "label" => "RegExp"
    )
);