<?php
defined('DF') or die;

/**
 * Quando vem das matérias mudamos a descrições
 */
if (isset($materia)) {
    $head_meta = array(
        "description" => $materia->resumo,
        "keywords" => KEYWORDS_PAD . $materia->getKeyWords()
    );
}
?>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo $head_meta['description'] ?>"/>
<meta name="keywords" content="<?php echo $head_meta['keywords'] ?>"/>
<meta property="og:image" content="<?php echo ROOT_PATH; ?>furia/imagens/favicon_1_16x16x1.png"/>
<link rel="shortcut icon" type="imagens/gif" href="<?php echo ROOT_PATH ?>furia/imagens/favicon.ico">
