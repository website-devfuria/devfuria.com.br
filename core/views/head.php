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
        <script type="text/javascript">
            var _gaq = _gaq || [];

            _gaq.push(['_setAccount', 'UA-34523500-1']);

            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    <?php endif; ?>