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
//define('ROOT_PATH', "http://www.devfuria.com.br/");
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
 * Palavras chaves da home
 */
define('KEYWORDS_PAD', "devfuria; aplicações web; webapp; app's; desenvolvimento; desenvolvimento web; website;" .
        "webstandards; programação; aprendendo programação; aulas de programação; tutoriais; artigos; ");
define('KEYWORDS_TEC', "php; php5; php6; php5.3; php5.4; javascript; js; html; html5; css; css3; regexp: lógica de programação; sql; mysql");

/**
 * Palavras chaves das seções
 */
define('KEYWORDS_PHP', "php básico; php fácil; php início; php iniciante; php iniciando; php iniciante; " .
        "começando com php; começando no php; php descomplicado; aprendendo php; " .
        "matéria sobre php; aula sobre php; ");
define('KEYWORDS_JS', "javascript básico; javascript fácil; javascript início; javascript iniciante; " .
        "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; " .
        "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; ");
define('KEYWORDS_HTMLCSS', "html básico; html fácil; html início; html iniciante; " .
        "html iniciando; html iniciante; começando com html; começando no html; " .
        "html descomplicado; aprendendo html; matéria sobre html; aula sobre html" .
        "css básico; css fácil; css início; css iniciante; " .
        "css iniciando; css iniciante; começando com css; começando no css; " .
        "css descomplicado; aprendendo css; matéria sobre css; aula sobre css;" .
        "folhas estilo cascata, web standards, padrões web, tableless");
define('KEYWORDS_LOGICA', "lógica básico; lógica fácil; lógica início; lógica iniciante; " .
        "lógica iniciando; lógica iniciante; começando com lógica; começando no lógica; " .
        "lógica descomplicado; aprendendo lógica; matéria sobre lógica; aula sobre lógica; ");
define('KEYWORDS_REGEXP', "regexp básico; regexp fácil; regexp início; regexp iniciante; " .
        "regexp iniciando; regexp iniciante; começando com regexp; começando no regexp; " .
        "regexp descomplicado; aprendendo regexp; matéria sobre regexp; aula sobre regexp; " .
        "expressões regulares");
define('KEYWORDS_MYSQL', "sql básico; sql fácil; sql início; sql iniciante; " .
        "sql iniciando; sql iniciante; começando com sql; começando no sql; " .
        "sql descomplicado; aprendendo sql; matéria sobre sql; aula sobre sql; " .
        "mysql básico; mysql fácil; mysql início; mysql iniciante; " .
        "mysql iniciando; mysql iniciante; começando com mysql; começando no mysql; " .
        "mysql descomplicado; aprendendo mysql; matéria sobre mysql; aula sobre mysql; ");


/**
 * Classes diversas
 */
require (BASE_PATH . "/oop/Core.php");
require (BASE_PATH . "/oop/Head.php");
require (BASE_PATH . "/oop/NavTop.php");
require (BASE_PATH . "/oop/ListaSecao.php");


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
    LINKS_PATH . "/logica/basico/bateria01/" => "Primeira Bateria",
);

$core->links[Core::SECAO_HTML] = array(
    LINKS_PATH . "/html-css/basico/onde-tudo-comecou/" => "Onde tudo começou",
    LINKS_PATH . "/html-css/basico/html-e-css-intro/" => "HTML e CSS - Introdução",
    LINKS_PATH . "/html-css/basico/elementos-inline-block-level/" => "Elementos in-line e elementos block-level",
    LINKS_PATH . "/html-css/basico/primeiro-html/" => "Criando nosso primeiro HTML [com vídeo]",
);
$core->links[Core::SECAO_MYSQL] = array(
    LINKS_PATH . "/mysql/basico/intro/" => "Banco de dados prá que?",
);

$core->links[Core::SECAO_ER] = array(
    LINKS_PATH . "/regexp/basico/intro/" => "Introdução",
    LINKS_PATH . "/regexp/basico/preg-match" => "preg_match()",
    LINKS_PATH . "/regexp/basico/string-match" => "string.match()",
    LINKS_PATH . "/regexp/basico/pattern-test" => "pattern.test() ",
    LINKS_PATH . "/regexp/basico/pattern-exec" => "pattern.exec() ",
    LINKS_PATH . "/regexp/basico/new-regexp" => "new RegExp() ",
    LINKS_PATH . "/regexp/basico/ponto" => "ponto",
    LINKS_PATH . "/regexp/basico/varios-resultados-preg-match-all" => "Vários resultados - preg_match_all()",
    LINKS_PATH . "/regexp/basico/varios-resultados-match-test-exec" => "Vários resultados - match(), test() e exec()",
);