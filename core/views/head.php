<?php
/**
 * Este script é o cabeçalho padrão
 */
# título padrão
if (!$conteudo->head->title) {
    $conteudo->head->title = DOMINIO;
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $conteudo->head->title; ?></title>
<meta name="description" content="<?php echo $conteudo->head->description; ?>">
<meta name="keywords" content="<?php echo $conteudo->head->keywords; ?>">
<meta name="author" content="<?php echo $conteudo->head->author; ?>">

<link rel="shortcut icon" href="<?php echo LINKS_PATH; ?>/core/imagens/favicon_1_16x16x1.png">

<link href="<?php echo LINKS_PATH; ?>/core/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/assets/css/docs.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/assets/css/pygments-manni.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/highlight/styles/github.css" rel="stylesheet">

<link rel="shortcut icon" type="imagens/gif" href="<?php echo LINKS_PATH ?>/core/imagens/favicon.ico">
<meta property="og:image" content="<?php echo LINKS_PATH; ?>/core/imagens/favicon_1_16x16x1.png"/>