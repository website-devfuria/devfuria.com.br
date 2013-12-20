<?php

/**
 * Arquivo Bootstrap
 */
/**
 *
 */
session_start();


/**
 *
 */
define('DF', true);
//define('GANALYTICS_ON', true); // liga
define('GANALYTICS_ON', false); // desliga



/**
 * Root
 */
//define('ROOT_PATH', "http://www.devfuria.com.br");
define('ROOT_PATH', "http://localhost/devfuria/www.devfuria.com.br");


/**
 * Caminho relativo da raiz do sistema
 */
define('BASE_PATH', dirname(__FILE__));


/**
 * Caminho absoluto para links e imagens
 */
# www.devefuria.com.br
define('LINKS_PATH', ROOT_PATH);



/**
 * Pasta das views
 */
define('VIEWS_PATH', "/views/");


/**
 * Pasta dos componetes (referente as views) 
 */
//define('VIEWS_COMP_PATH', "/views/comp/");


/**
 *  Domínio, utilizado nos title das páginas
 */
define('DOMINIO', "devfuria.com.br");



/**
 * Classes diversas
 */
require (BASE_PATH . "/oop/Core.php");
require (BASE_PATH . "/oop/Head.php");
require (BASE_PATH . "/oop/NavTop.php");
require (BASE_PATH . "/oop/ListaSecao.php");
require (BASE_PATH . "/oop/Paginacao.php");


/**
 * Variáveis do sistema
 */

$core = new Core();
$core->secoes = array(
    "js" => "Javascript",
    "php" => "PHP",
    "html-css" => "HTML & CSS",
    "logica" => "Lógica de Programação",
    "regexp" => "RegExp",
    "mysql" => "MySql & SQL"
);
$core->links[Core::SECAO_JS] = array(
    LINKS_PATH . "/js/basico/intro/" => "Introdução",
    LINKS_PATH . "/js/basico/preparando-o-terreno/" => "Preparando o terreno",
    LINKS_PATH . "/js/basico/debugando/" => "Debugando (depurando) [com vídeo]",
    LINKS_PATH . "/js/basico/code-lampadas/" => "Code - A Lâmpada",
    LINKS_PATH . "/js/basico/code-lampadas-refatorando/" => "Code - A Lâmpada (refatorando)"
);
$core->links[Core::SECAO_PHP] = array(
    LINKS_PATH . "/php/basico/um-bom-comeco/" => "Um bom começo",
    LINKS_PATH . "/php/basico/pe-na-jaca/" => "Antes de enfiar o pé na jáca",
    LINKS_PATH . "/php/basico/instalando-o-ambiente/" => "Instalando o ambiente no estilo NEXT, NEXT, NEXT",
    LINKS_PATH . "/php/basico/debugando/" => "Debugando (depurando)",
);
$core->links[Core::SECAO_LOG] = array(
    LINKS_PATH . "/logica/basico/intro/" => "Introdução",
    LINKS_PATH . "/logica/basico/exercicios-resolvidos-de-logica-de-programacao/" => "Exercícios de lógica de programação (operadores de atribuição)",
    LINKS_PATH . "/logica/basico/if-else/" => "Expressões Condicionais",
    LINKS_PATH . "/logica/basico/exercicios-de-logica de-programacao-com-respotas/" => "Exercícios de lógica de programação (expressões condicionais)",
    LINKS_PATH . "/logica/basico/tdd/" => "Vamos de TDD?",
);
$core->links[Core::SECAO_HTML] = array(
    LINKS_PATH . "/html-css/basico/onde-tudo-comecou/" => "Onde tudo começou",
    LINKS_PATH . "/html-css/basico/html-intro/" => "Primeiro contato com HTML",
    LINKS_PATH . "/html-css/basico/css-intro/" => "Primeiro contato com CSS",
    LINKS_PATH . "/html-css/basico/elementos-inline-block-level/" => "Elementos in-line e elementos block-level",
    LINKS_PATH . "/html-css/basico/primeiro-html/" => "Criando nosso primeiro HTML [com vídeo]",
);
$core->links[Core::SECAO_MYSQL] = array(
    LINKS_PATH . "/mysql-sql/basico/intro/" => "Banco de dados prá que?",
    LINKS_PATH . "/mysql-sql/basico/primeiros-passos-mysql/" => "Primeiros passos com MySql",
);
$core->links[Core::SECAO_ER] = array(
    LINKS_PATH . "/regexp/basico/intro/" => "Introdução",
    LINKS_PATH . "/regexp/basico/preg-match/" => "preg_match()",
    LINKS_PATH . "/regexp/basico/string-match/" => "string.match()",
    LINKS_PATH . "/regexp/basico/pattern-test/" => "pattern.test() ",
    LINKS_PATH . "/regexp/basico/pattern-exec/" => "pattern.exec() ",
    LINKS_PATH . "/regexp/basico/new-regexp/" => "new RegExp() ",
    LINKS_PATH . "/regexp/basico/ponto/" => "ponto",
    LINKS_PATH . "/regexp/basico/varios-resultados-preg-match-all/" => "Vários resultados - preg_match_all()",
    LINKS_PATH . "/regexp/basico/varios-resultados-match-test-exec/" => "Vários resultados - match(), test() e exec()",
);