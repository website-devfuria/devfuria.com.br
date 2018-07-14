<?php if (isset($page->front['author'])): ?>
<meta name="author" content="<?php echo $page->front['author'] ?>" />
<?php else: ?>
<meta name="author" content="<?php echo Site::$author ?>">
<?php endif ?>