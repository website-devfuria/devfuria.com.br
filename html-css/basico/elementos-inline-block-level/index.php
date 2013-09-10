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
define("ELEMENTOS_INLINE_BLOCK_LEVEL", 2);
$materia = new Materia();
$materia->carregar(Materia::idXML_HTML_CSS, ELEMENTOS_INLINE_BLOCK_LEVEL);
$materia->setNivel(Materia::BASICO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>