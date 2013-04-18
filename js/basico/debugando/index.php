<?php
/**
 * Arquivo index que funciona como redirecionador
 */


/**
 * Includes
 */
require "../../../furia/includes/bs.php";


/**
 * Instancia a matéria correta
 */
$materia = new Materia(14);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>