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
define("INTRO", 0);
$materia = new Materia();
$materia->carregar(Materia::idXML_MYSQL, INTRO);
$materia->setNivel(Materia::BASICO);



/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>
