<?php
$view->head->setTitle($pagina->metaTitle);
$view->head->setDescription($pagina->metaDescr);
$view->head->setkeywords($pagina->metaKeywords);
$view->head->setAuthor($pagina->autor);
include BASE_PATH . VIEWS_PATH . "/head.php";
