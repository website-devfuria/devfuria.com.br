<?php
/**
 * Arquivo Bootstrap
 */

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
    
    $qtd--;
    $qtd--;
    $res = str_pad("", $qtd*3, "../", STR_PAD_LEFT);

    return $res;
}


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
define('COMPONENTES_PATH', "furia/comp/");

/**
 *  Domínio
 */
define('DOMINIO', "devfuria.com.br");



/**
 * Conexão com o DB
 */
require (BASE_PATH."furia/includes/Conn.class.php");


/**
 * Classe Materia
 */
require (BASE_PATH."furia/includes/Materia.class.php");