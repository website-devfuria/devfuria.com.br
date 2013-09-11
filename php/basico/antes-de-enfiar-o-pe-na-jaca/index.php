<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/boot.php";


/**
 * Instancia a matéria
 */
define("PE_NA_JACA", 1);
$materia = new Materia();
$materia->carregar(Materia::idXML_PHP, PE_NA_JACA);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>