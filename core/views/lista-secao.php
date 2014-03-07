<?php
/**
 * Lista as matŕeias de cada seção
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
    <?php foreach ($core->lista->links as $path => $titulo): ?>
        <a href="<?php echo $path ?>" class="list-group-item <?php echo (strstr($path, $core->lista->link_ativo)) ? "active" : null; ?>">
            <?php echo "$interator) " . $titulo ?>
        </a>
        <?php $interator++; ?>
    <?php endforeach; ?>
</div>