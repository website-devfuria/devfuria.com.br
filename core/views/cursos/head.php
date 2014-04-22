<?php
/**
 * Head dos cursos
 */

# Setando dados
$view->head->setTitle($pagina->metaTitle);
$view->head->setDescription($pagina->metaDescr);
$view->head->setkeywords($pagina->metaKeywords);
$view->head->setAuthor($pagina->autor);

# Chama o cabeçalho padrão
include BASE_PATH . VIEWS_PATH . "/head.php";
