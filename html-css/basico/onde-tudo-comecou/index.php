<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria correta
 */
define("ONDE_TUDO_COMECOU", 0);
$materia = new Materia();
$materia->carregar(Materia::idXML_HTML_CSS, ONDE_TUDO_COMECOU);
$materia->setNivel(Materia::BASICO);



/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>