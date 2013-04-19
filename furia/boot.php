<?php
/**
 * Arquivo Bootstrap
 */


/**
 *
 */
session_start();


/**
 * Descobre o caminho relativo(da raiz) para podermos referenciar arquivos
 * php, css, js, imgs, e etc...
 *
 * @return type
 */
function descobre_caminho_relativo(){
    $dir  = getcwd();
    $root = $_SERVER['DOCUMENT_ROOT'];

    $dir = str_replace($root, "", $dir);
    $qtd = substr_count($dir, '/');

    if(  isset($_SERVER['PATH_INFO'])  ){
        if( $_SERVER['PATH_INFO'] == "/" ){
            $qtd++;
        }
    }

    /*
     * 0 para dialhost
     * 1 no escritório
     * 2 no note do ale
     */
    $qtd-= 2;
    $res = str_pad("", $qtd*3, "../", STR_PAD_LEFT);

    return $res;
}




/**
 *
 */
define('DF', true);


/**
 * Caminho relativo da raiz do sistema
 */
define('BASE_PATH', descobre_caminho_relativo());

/**
 * Root
 */
define('ROOT_PATH', "http://www.devfuria.com.br/");


/**
 *
 */
define('VIEWS_PATH', "furia/views/");


/**
 *
 */
define('VIEWS_COMP_PATH', "furia/views/comp/");

/**
 *  Domínio
 */
define('DOMINIO', "devfuria.com.br");

/**
 * Chave acesso à área administrativa
 */
define("CHAVE", 1234);


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
 * Conexão com o DB
 */
require (BASE_PATH."furia/Conn.class.php");


/**
 * Classe Materia
 */
require (BASE_PATH."furia/Materia.class.php");

/**
 * Markdown
 */
require (BASE_PATH."furia/markdown.php");


/**
 * Classes diversas
 */
require (BASE_PATH."furia/FuncAux.class.php");
