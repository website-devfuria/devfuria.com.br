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
define("ESTUDOS_LOG_1_5", 1);
$materia = new Materia();
$materia->carregar(Materia::idXML_LOGICA, ESTUDOS_LOG_1_5);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>