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
define("PREPARANDO_TERRENO", 1);
$materia = new Materia();
$materia->carregar(Materia::idXML_JS, PREPARANDO_TERRENO);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>