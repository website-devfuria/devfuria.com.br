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
 * Caminho relativo da raiz do sistema
 */
define('BASE_PATH', dirname(__FILE__));


/**
 * 
 */
define('LINKS_PATH', "http://localhost/devfuria/www.devfuria.com.br/");


/**
 * Root
 */
define('ROOT_PATH', "http://www.devfuria.com.br/");


/**
 *
 */
define('VIEWS_PATH', "/views/");


/**
 *
 */
define('VIEWS_COMP_PATH', "/views/comp/");

/**
 *  Domínio
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