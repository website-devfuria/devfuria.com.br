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
define("PRIMEIRO_HTML", 3);
$materia = new Materia();
$materia->carregar(Materia::idXML_HTML_CSS, PRIMEIRO_HTML);
$materia->setNivel(Materia::BASICO);

/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>
