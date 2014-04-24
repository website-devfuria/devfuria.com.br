<?php
/**
 * Barra de navegação superior
 * ===========================
 *
 *
 * Pode ser chamado com a seção ativa...
 *
 *     $conteudo->navtop->secaoAtiva = Conteudo::SECAO_PHP;
 *     include BASE_PATH . VIEWS_PATH . "/nav-top.php";
 *
 * Ou sem seção ativa...
 *
 *     include BASE_PATH . VIEWS_PATH . "/nav-top.php";
 */

# Se tivermos a paginas, quero dizer
# se é uma matéria, rtg, canvas, etc...
if (isset($pagina)) {
    # atualiza o link da nav-top coma aba correta
    $view->navtop->atualizarSecoes($pagina->secao, $pagina->subSecao);
}

?>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo LINKS_PATH . "/"; ?>" class="navbar-brand">DevFuria</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <?php foreach ($view->navtop->secoes as $keySecao => $secao): ?>
                    <li class="<?php echo ($keySecao == $view->navtop->secaoAtiva) ? "active" : null; ?>">
                        <a href="<?php echo LINKS_PATH . "/" . $secao['href']; ?>"><?php echo $secao['label']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</header>