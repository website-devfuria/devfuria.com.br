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


/**
 * Root
 */
//define('ROOT_PATH', "http://www.devfuria.com.br/");
define('ROOT_PATH', "http://localhost/devfuria/www.devfuria.com.br/");


/**
 * Caminho relativo da raiz do sistema
 */
define('BASE_PATH', dirname(__FILE__));


/**
 * Caminho absoluto para links e imagens
 */
# www.devefuria.com.br
define('LINKS_PATH', ROOT_PATH);
# local
//define('LINKS_PATH', "http://localhost/devfuria/www.devfuria.com.br/");



/**
 * Pasta das views
 */
define('VIEWS_PATH', "/views/");


/**
 * Pasta dos componetes (referente as views) 
 */
define('VIEWS_COMP_PATH', "/views/comp/");


/**
 *  Domínio, utilizado nos title das páginas
 */
define('DOMINIO', "devfuria.com.br");



/**
 * Palavras chaves
 */
define('KEYWORDS_PAD',      "devfuria; aplicações web; webapp; app's; desenvolvimento; desenvolvimento web; website;".
                            "webstandards; programação; aprendendo programação; aulas de programação; tutoriais; artigos; ");
define('KEYWORDS_TEC',      "php; php5; php6; php5.3; php5.4; javascript; js; html; html5; css; css3; ");
define('KEYWORDS_PHP',      "php básico; php fácil; php início; php iniciante; php iniciando; php iniciante; ".
                            "começando com php; começando no php; php descomplicado; aprendendo php; ".
                            "matéria sobre php; aula sobre php; ");
define('KEYWORDS_JS',       "javascript básico; javascript fácil; javascript início; javascript iniciante; ".
                            "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; ".
                            "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; ");
define('KEYWORDS_HTMLCSS',  "html básico; html fácil; html início; html iniciante; ".
                            "html iniciando; html iniciante; começando com html; começando no html; ".
                            "html descomplicado; aprendendo html; matéria sobre html; aula sobre html".
                            "css básico; css fácil; css início; css iniciante; ".
                            "css iniciando; css iniciante; começando com css; começando no css; ".
                            "css descomplicado; aprendendo css; matéria sobre css; aula sobre css;".
                            "folhas estilo cascata, web standards, padrões web, tableless");
define('KEYWORDS_LOGICA',   "lógica básico; lógica fácil; lógica início; lógica iniciante; ".
                            "lógica iniciando; lógica iniciante; começando com lógica; começando no lógica; ".
                            "lógica descomplicado; aprendendo lógica; matéria sobre lógica; aula sobre lógica; ");
define('KEYWORDS_REGEXP',   "regexp básico; regexp fácil; regexp início; regexp iniciante; ".
                            "regexp iniciando; regexp iniciante; começando com regexp; começando no regexp; ".
                            "regexp descomplicado; aprendendo regexp; matéria sobre regexp; aula sobre regexp; ".
                            "expressões regulares");
define('KEYWORDS_MYSQL',    "sql básico; sql fácil; sql início; sql iniciante; ".
                            "sql iniciando; sql iniciante; começando com sql; começando no sql; ".
                            "sql descomplicado; aprendendo sql; matéria sobre sql; aula sobre sql; ".
                            "mysql básico; mysql fácil; mysql início; mysql iniciante; ".
                            "mysql iniciando; mysql iniciante; começando com mysql; começando no mysql; ".
                            "mysql descomplicado; aprendendo mysql; matéria sobre mysql; aula sobre mysql; ");


/**
 * Classe Materia
 */
require (BASE_PATH."/Materia.php");


/**
 * Markdown
 */
require (BASE_PATH."/markdown.php");


/**
 * Classes diversas
 */