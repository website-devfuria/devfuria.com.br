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
define("UM_BOM_COMECO", 0);
$materia = new Materia();
$materia->carregar(Materia::idXML_PHP, UM_BOM_COMECO);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>
