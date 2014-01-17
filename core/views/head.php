<?php
/**
 * Este script é o cabeçalho padrão
 */
# título padrão
if (!$core->head->title) {
    $core->head->title = DOMINIO;
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo $core->head->title; ?></title>
<meta name="description" content="<?php echo $core->head->description; ?>">
<meta name="keywords" content="<?php echo $core->head->keywords; ?>">
<meta name="author" content="<?php echo $core->head->author; ?>">

<link rel="shortcut icon" href="<?php echo ROOT_PATH; ?>/core/imagens/favicon_1_16x16x1.png">

<link href="<?php echo LINKS_PATH; ?>/core/dist/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/assets/css/docs.css" rel="stylesheet">
<link href="<?php echo LINKS_PATH; ?>/core/assets/css/pygments-manni.css" rel="stylesheet">
<link  href="<?php echo LINKS_PATH; ?>/core/highlight/styles/github.css" rel="stylesheet">

<link rel="shortcut icon" type="imagens/gif" href="<?php echo ROOT_PATH ?>/core/imagens/favicon.ico">
<meta property="og:image" content="<?php echo ROOT_PATH; ?>/core/imagens/favicon_1_16x16x1.png"/>

<?php if (GANALYTICS_ON): ?>
    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-34523500-1', 'devfuria.com.br'); // Substituir pela seu ID de propriedade 
        ga('send', 'pageview');
    </script><!-- End Google Analytics -->
<?php endif; ?>