<?php
/**
 * Faz a paginação das páginas
 * ===========================
 *
 * As páginas podems ser matérias (cursos).
 * Os guias (rtg) não estão utilizando.
 * O canvas também não.
 *
 */
?>
<ul class="pager hidden-xs">
    <?php if ($view->paginacao->anterior['href']): ?>
        <li class="previous">
            <a href="<?php echo LINKS_PATH . $view->paginacao->anterior['href']; ?>">
                <span class="glyphicon glyphicon-arrow-left"></span>
                <?php echo $view->paginacao->anterior['titulo']; ?>
            </a>
        </li>
    <?php else: ?>
        <li class="previous"></li>
    <?php endif; ?>

    <?php if ($view->paginacao->proxima['href']): ?>
        <li class="next">
            <a href="<?php echo LINKS_PATH . $view->paginacao->proxima['href']; ?>">
                <?php echo $view->paginacao->proxima['titulo']; ?>
                <span class="glyphicon glyphicon-arrow-right"></span>
            </a>
        </li>
    <?php else: ?>
        <li class="previous"></li>
    <?php endif; ?>
</ul>