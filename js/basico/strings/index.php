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
define("_NEW", 0);
$materia = new Materia();
$materia->carregarDraft(Materia::idXML_JS, _NEW);
$materia->setNivel(Materia::BASICO);



/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>
