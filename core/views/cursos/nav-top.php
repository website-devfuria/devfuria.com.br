<?php
/**
 * Nav-top das páginas curso, rtg, canvas, etc...
 */

# anota a seção ativa
$view->navtop->secaoAtiva = $pagina->secao;

# Chama o nav-top padrão
include BASE_PATH . VIEWS_PATH . "/nav-top.php";
