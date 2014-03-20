<footer class="bs-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                $view->lista->setLinks($conteudo->paginas, $pagina->secao, $pagina->categoria);
                $view->lista->urlAtual = $pagina->url;
                include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                ?>
            </div>
        </div>
    </div>
</footer>