<?php
/**
 * Faz a paginação das páginas
 * ===========================
 *
 * As páginas podem ser matérias (cursos), canvas, etc...
 *
 * Os guias (rtg) não devem utilizar (não tem sequencia lógica).
 *
 */
$view->paginacao->urlAtual = $pagina->url;
$view->paginacao->descobrirAnteriorProxima($conteudo->paginas[$pagina->secao][$pagina->subSecao]);
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