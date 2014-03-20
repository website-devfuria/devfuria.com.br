<?php
/**
 * Faz a paginação das matérias
 *
 */
?>
<ul class="pager hidden-xs">
    <?php if ($conteudo->paginacao->anterior['href']): ?>
        <li class="previous">
            <a href="<?php echo LINKS_PATH . $conteudo->paginacao->anterior['href']; ?>">
                <span class="glyphicon glyphicon-arrow-left"></span>
                <?php echo $conteudo->paginacao->anterior['titulo']; ?>
            </a>
        </li>
    <?php else: ?>
        <li class="previous"></li>
    <?php endif; ?>

    <?php if ($conteudo->paginacao->proxima['href']): ?>
        <li class="next">
            <a href="<?php echo LINKS_PATH . $conteudo->paginacao->proxima['href']; ?>">
                <?php echo $conteudo->paginacao->proxima['titulo']; ?>
                <span class="glyphicon glyphicon-arrow-right"></span>
            </a>
        </li>
    <?php else: ?>
        <li class="previous"></li>
    <?php endif; ?>
</ul>