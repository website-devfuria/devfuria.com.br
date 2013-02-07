<?php
/**
 * Includes
 */
require "../furia/includes/bs.php";


$acao = isset($_POST['ac']) ? $_POST['ac'] : null ;

switch ($acao) {

    case "select":
        $materias = Materia::getObjects($where=null, $order="ORDER BY id");
        echo json_encode($materias);
        break;

    case "total":
        $total_regis = Materia::total_registros();
        echo (int)($total_regis);
        break;

    case "insert":
        $materia = isset($_POST['materia']) ? $_POST['materia'] : null ;
        var_dump( json_decode($materia) );

        break;

}



?>