<meta property="og:locale" content="pt_BR" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="DevFuria" />

<meta property="og:title" content="<?php isset($page->front['title']) ? $page->front['title'] : Site::$title; ?>" />
<?php if (isset($page->front['description'])): ?>
    <meta name="og:description" content="<?php echo $page->front['description'] ?>" />
<?php endif ?>

<meta property="og:url" content="<?php echo $page->url_str ?>" />

<?php if (isset($page->front['ogimage'])): ?>
    <meta property="og:image" content="<?php echo $page->url_str . $page->front['ogimage'] ?>"/>
<?php else: ?>
    <meta property="og:image" content="http://www.devfuria.com.br/assets/images/favicon.png"/>
<?php endif ?>
