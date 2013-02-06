<?php
/**
 * Includes
 */
require "../furia/includes/bs.php";


$materias = Materia::getObjects($where=null, $order="ORDER BY id");
echo json_encode($materias);

?>