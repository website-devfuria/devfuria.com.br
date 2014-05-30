<?php
/**
 * Lista as matérias de cada seção
 * ===============================
 *
 * Utilizado pela home, index e pelos conteúdo (curso, rtg, canvas, etc...)
 *
 *
 * ### Como utilizar
 *
 *      // Entenda que...
 *      //$view->lista = new ListaSecao();
 *
 *      // Diga o label (h1)
 *      $view->lista->label = ListaSecao::LABEL_CURSO_JS;
 *
 *      // Diga os links
 *      $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::SUB_SECAO_CURSO);
 *
 *      // Chame a view
 *      include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
 */
?>
<h2><?php echo $view->lista->label ?></h2>

<div class="list-group">
    <?php foreach ($view->lista->links as $pagina): ?>
        <a href="<?php echo LINKS_PATH . $pagina->url ?>"
           class="list-group-item <?php echo (strstr($pagina->url, $view->lista->urlAtual)) ? "active" : null; ?> clearfix"
           title="<?php echo $pagina->metaTitle ?>"
           >
            <?php echo $pagina->urlLabel ?>
            <?php
            $mesDiff = $pagina->retDiferencEntreHojeDtAtualizacao();
            if ($mesDiff == 0) {
                $css = "label-primary";
            } else if ($mesDiff == 1 || $mesDiff == 2) {
                $css = "label-info";
            } else {
                $css = "label-default";
            }
            ?>
            <small class="lista-secao">  -  <?php echo $pagina->metaDescr ?></small>
            <span class="label <?php echo $css; ?> pull-right">
                <?php echo date("M-Y", strtotime($pagina->dtAtualizacao)); ?>
            </span>
        </a>
    <?php endforeach; ?>
</div>