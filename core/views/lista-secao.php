<?php
/**
 * Lista as matérias de cada seção
 *
 * # diga o label (h1)
 * $view->lista->label = ListaSecao::LABEL_CURSO_JS;
 * 
 * # diga os links
 * $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::CATEGORIA_CURSO);
 * 
 * # chame a view
 * include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
 */
?>
<h1><?php echo $view->lista->label ?></h1>

<div class="list-group">
    <?php foreach ($view->lista->links as $pagina): ?>
        <a href="<?php echo LINKS_PATH . $pagina->url ?>" 
           class="list-group-item <?php echo (strstr($pagina->url, $view->lista->urlAtual)) ? "active" : null; ?>"
           >
            <?php echo $pagina->urlLabel ?>
        </a>
    <?php endforeach; ?>
</div>