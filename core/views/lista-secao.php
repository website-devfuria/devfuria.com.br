<?php
/**
 * Lista as matérias de cada seção
 *
 * Utilizado diretamente pela home e
 * indiretamente por: index de cada seção, matérias e guias (receitas).
 */
?>
<?php $interator = 1; ?>

<?php if ($core->lista->label): ?>
    <h1><?php echo $core->lista->label ?></h1>
<?php else: ?>
    <h1><?php echo $core->secoes[$core->navtop->secao_ativa]['label'] ?></h1>
<?php endif; ?>


<div class="list-group">
    <?php foreach ($core->lista->links as $pagina): ?>
        <a href="<?php echo LINKS_PATH . $pagina->url ?>" class="list-group-item <?php echo (strstr($pagina->url, $core->lista->link_ativo)) ? "active" : null; ?>">
            <?php echo "$interator) " . $pagina->label_link ?>
        </a>
        <?php $interator++; ?>
    <?php endforeach; ?>
</div>