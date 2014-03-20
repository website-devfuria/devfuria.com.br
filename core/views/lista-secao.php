<?php
/**
 * Lista as matérias de cada seção
 *
 * home
 *     $view->lista->label = ListaSecao::LABEL_CURSO_JS;
 *     $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_JS, Conteudo::CATEGORIA_CURSO);
 *     include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
 *
 * index cursos
 *     $view->lista->label = ListaSecao::LABEL_CURSO_PHP;
 *     $view->lista->setLinks($conteudo->paginas, Conteudo::SECAO_PHP, Conteudo::CATEGORIA_CURSO);
 *     include BASE_PATH . VIEWS_PATH . "/cursos/lista-secao.php";
 *
 * matérias cursos
 *     $view->lista->setLinks($conteudo->paginas, $pagina->secao, $pagina->categoria);
 *     $view->lista->urlAtual = $pagina->url;
 *     include BASE_PATH . VIEWS_PATH . "/lista-secao.php"; ?>
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