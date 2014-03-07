<?php
/**
 * Faz a paginação das matérias
 *
 *          <?php
 *          $core->paginacao->link_ativo = "/js/basico/preparando-o-terreno/";
 *          $core->paginacao->descobrirAnteriorProxima($core->paginas[Core::SECAO_JS]);
 *          include BASE_PATH . VIEWS_PATH . "/paginacao.php";
 *          ?>
 *      </div>
 * </div><!-- Corpo da matéria -->
 */
?>

<ul class="pager">
    <?php if ($core->paginacao->anterior['href']): ?>
        <li class="previous">
            <a href="<?php echo $core->paginacao->anterior['href']; ?>">
                <span class="glyphicon glyphicon-arrow-left"></span>
                <?php echo $core->paginacao->anterior['titulo']; ?>
            </a>
        </li>
    <?php else: ?>
        <li class="previous"></li>
    <?php endif; ?>

    <?php if ($core->paginacao->proxima['href']): ?>
        <li class="next">
            <a href="<?php echo $core->paginacao->proxima['href']; ?>">
                <?php echo $core->paginacao->proxima['titulo']; ?>
                <span class="glyphicon glyphicon-arrow-right"></span>
            </a>
        </li>
    <?php else: ?>
        <li class="previous"></li>
    <?php endif; ?>
</ul>