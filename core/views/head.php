<?php
/**
 * Este script é o cabeçalho padrão
 *
 * home e index
 *
 *     $view->head->setTitle('Desenvolvimento Web');
 *     $view->head->setDescription('Cursos, aulas, tutoriais, apostilas, matérias sobre programação web prá ninguém botar defeito!');
 *     $view->head->setkeywords("aplicações web; webapp; app's; desenvolvimento; desenvolvimento web; website; cursos web; webstandards;  programação; aprendendo programação; aulas de programação; tutoriais; artigos;");
 *     $view->head->setAuthor();
 *     include BASE_PATH . VIEWS_PATH . "/head.php";
 *
 * cursos
 *
 *     $view->head->setTitle($pagina->metaTitle);
 *     $view->head->setDescription($pagina->metaDescr);
 *     $view->head->setkeywords($pagina->metaKeywords);
 *     $view->head->setAuthor($pagina->autor);
 *     include BASE_PATH . VIEWS_PATH . "/head.php";
 *
 */
# título padrão
if (!$view->head->title) {
    $view->head->title = DOMINIO;
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $view->head->title; ?></title>
<meta name="description" content="<?php echo $view->head->description; ?>">
<meta name="keywords" content="<?php echo $view->head->keywords; ?>">
<meta name="author" content="<?php echo $view->head->author; ?>">

<link rel="shortcut icon" href="<?php echo LINKS_PATH; ?>/core/imagens/favicon_1_16x16x1.png">

<link href="<?php echo LINKS_PATH; ?>/core/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/assets/css/docs.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/assets/css/pygments-manni.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/highlight/styles/github.css" rel="stylesheet">

<link rel="shortcut icon" type="imagens/gif" href="<?php echo LINKS_PATH ?>/core/imagens/favicon.ico">
<meta property="og:image" content="<?php echo LINKS_PATH; ?>/core/imagens/favicon_1_16x16x1.png"/>