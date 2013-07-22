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
define("VARIOS_PHP", 7);
$materia = new Materia();
$materia->carregar(Materia::idXML_REGEXP, VARIOS_PHP);
$materia->setNivel(Materia::BASICO);

/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>