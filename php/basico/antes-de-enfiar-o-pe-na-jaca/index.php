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
$materia = new Materia(3);


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";

?>