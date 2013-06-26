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
//define("NEW", 0);
$materia = new Materia();
//$materia->carregar(Materia::idXML_JS, PREPARANDO_TERRENO);
$materia->setNivel(Materia::BASICO);

$materia->url            = "seila";
$materia->titulo         = "new";
$materia->resumo         = "resumo";
$materia->keywords       = "keywords";
$materia->secao          = Materia::BASICO;
$materia->autor          = "eu";
$materia->dt_criacao     = "hoje";
$materia->dt_atualizacao = "hoje";


/**
 * View
 */
require BASE_PATH.VIEWS_PATH."materias.php";
?>
