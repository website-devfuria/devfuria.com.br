<?php
/**
 * Footer das páginas sobre do conteúdo RTG (receitas, tutos e guias)
 */
?>
<footer class="bs-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $view->lista->label = $view->lista->retLabelReferenciaSegundoSecao($pagina->secao);
                $view->lista->setLinks($conteudo->paginas, $pagina->secao, $pagina->subSecao);
                $view->lista->urlAtual = $pagina->url;
                include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                ?>
            </div>
        </div>
    </div>
</footer>