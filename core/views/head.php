<?php
/**
 * Cabeçalho padrão
 * ================
 *
 * Sete os dados
 *
 *      $view->head->setTitle('titulo');
 *      $view->head->setDescription('Descrição');
 *      $view->head->setkeywords("keywords");
 *      $view->head->setAuthor("autor");
 *      include BASE_PATH . VIEWS_PATH . "/head.php";
 *
 * Se não tiver algum dado, não chame a função, ex:
 *      $view->head->setTitle('titulo');
 *      $view->head->setDescription('Descrição');
 *      //$view->head->setkeywords();
 *      //$view->head->setAuthor();
 *      include BASE_PATH . VIEWS_PATH . "/head.php";
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