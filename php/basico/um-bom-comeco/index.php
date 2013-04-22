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
define("PHP_UM_BOM_COMECO", 2);

$materia = new Materia();
$materia->carregar(PHP_UM_BOM_COMECO);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>