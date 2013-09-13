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
define("STRING_MATCH", 2);
$materia = new Materia();
$materia->carregar(Materia::idXML_REGEXP, STRING_MATCH);
$materia->setNivel(Materia::BASICO);

/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>