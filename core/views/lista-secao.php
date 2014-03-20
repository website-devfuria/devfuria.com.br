<?php
/**
 * Lista as matérias de cada seção
 *
 * Utilizado diretamente pela home e
 * indiretamente por: index de cada seção, matérias e guias (receitas).
 */
?>
<h1><?php echo $view->lista->label ?></h1>

<div class="list-group">
    <?php foreach ($view->lista->links as $pagina): ?>
        <a href="<?php echo LINKS_PATH . $pagina->url ?>" class="list-group-item <?php echo (strstr($pagina->url, $view->lista->urlAtual)) ? "active" : null; ?>">
            <?php echo $pagina->urlLabel ?>
        </a>
    <?php endforeach; ?>
</div>