<?php


if(!$core->head->title){
    $core->head->title = DOMINIO;
}

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title><?php echo $core->head->title; ?></title>        

    <link href="<?php echo LINKS_PATH; ?>/core/dist/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo LINKS_PATH; ?>/core/assets/css/docs.css" rel="stylesheet">
    <link href="<?php echo LINKS_PATH; ?>/core/assets/css/pygments-manni.css" rel="stylesheet">

    <link rel="shortcut icon" type="imagens/gif" href="<?php echo ROOT_PATH ?>core/imagens/favicon.ico">
    <meta property="og:image" content="<?php echo ROOT_PATH; ?>core/imagens/favicon_1_16x16x1.png"/>
</head>