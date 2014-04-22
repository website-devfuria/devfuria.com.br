<?php
/**
 * Nav-top da família 01  (cursos, rtg, canvas, etc...)
 */

# anota a seção ativa
$view->navtop->secaoAtiva = $pagina->secao;

# Chama o nav-top padrão
include BASE_PATH . VIEWS_PATH . "/nav-top.php";
