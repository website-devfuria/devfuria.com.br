<?php
/**
 * Lista as matérias de cada seção
 *
 * Utilizado diretamente pela home e
 * indiretamente por: index de cada seção, matérias e guias (receitas).
 */
?>
<?php if ($conteudo->lista->label): ?>
    <h1><?php echo $conteudo->lista->label ?></h1>
<?php else: ?>
    <h1><?php echo $conteudo->secoes[$conteudo->navtop->secao_ativa]['label'] ?></h1>
<?php endif; ?>


<div class="list-group">
    <?php foreach ($conteudo->lista->links as $pagina): ?>
        <a href="<?php echo LINKS_PATH . $pagina->url ?>" class="list-group-item <?php echo (strstr($pagina->url, $conteudo->lista->link_ativo)) ? "active" : null; ?>">
            <?php echo $pagina->label_link ?>
        </a>
    <?php endforeach; ?>
</div>