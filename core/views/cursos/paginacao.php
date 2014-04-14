<?php
$view->paginacao->urlAtual = $pagina->url;
$view->paginacao->descobrirAnteriorProxima($conteudo->paginas[$pagina->secao][$pagina->subSecao]);
include BASE_PATH . VIEWS_PATH . "/paginacao.php";
