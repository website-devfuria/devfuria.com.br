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
define('KEYWORDS_PAD', "devfuria; aplicações web; webapp; app's; desenvolvimento; desenvolvimento web; website;".
                       "webstandards; programação; aprendendo programação; aulas de programação; tutoriais; artigos; ");
define('KEYWORDS_TEC', "php; php5; php6; php5.3; php5.4; javascript; js; html; html5; css; css3; ");
define('KEYWORDS_PHP', "php básico; php fácil; php início; php iniciante; php iniciando; php iniciante; ".
                       "começando com php; começando no php; php descomplicado; aprendendo php; ".
                       "matéria sobre php; aula sobre php; ");
define('KEYWORDS_JS', "javascript básico; javascript fácil; javascript início; javascript iniciante; ".
                      "javascript iniciando; javascript iniciante; começando com javascript; começando no javascript; ".
                      "javascript descomplicado; aprendendo javascript; matéria sobre javascript; aula sobre javascript; ");
define('KEYWORDS_HTMLCSS', "");
define('KEYWORDS_LOGICA', "");
define('KEYWORDS_REGEXP', "");
define('KEYWORDS_MYSQL', "");


/**
 * Classe Materia
 */
require (BASE_PATH."/Materia.class.php");


/**
 * Markdown
 */
require (BASE_PATH."/markdown.php");


/**
 * Classes diversas
 */