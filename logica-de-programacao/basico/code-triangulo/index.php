<?php
/**
 * Lógica/
 */
/**
 * Includes
 */
require "../../../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('Exemplo de código que utiliza funções');
        $core->head->setDescription('Matéria introdutória ilustrando a sintaxe básica do último exercício de lógica: é triângulo');
        $core->head->setkeywords('funções, procedimentos, exemplo de funções');
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>

        <?php
        $core->navtop->secao_ativa = Core::SECAO_LOG;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Code - Triângulo</h1>
                <p>Código de exemplo, comentado ilustrando a utilização de funções</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <div class="bs-old-docs">
            <div class="container">
                Flávio Micheletti, atualizado em <span class="label label-success">09/01/2014</span>, escrito em <span class="label label-info">09/01/2014</span>.
            </div>
        </div>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h1 id="triangulo">Revisitando o código "é triangulo"</h1>
                        </div>

                        <p>O último exercício da matéria<a href="<?php echo LINKS_PATH ?>/logica-de-programacao/basico/exercicios-expressoes-condicionais/#05">
                                (5 Exercícios de lógica de programação)</a> pede para identificarmos se os
                            valores passados formam um triângulo.</p>

                        <p>A utilização de <strong>funções</strong> para a solução do exercício "cai muito bem".</p>

                        <p>Confira o resultado...</p>


                        <pre><code class="language-php">function eTriangulo($a, $b, $c) {
    if ($a < ($b + $c)) {
        if ($b < ($a + $c)) {
            if ($c < ($a + $b)) {
                return true;
            }
        }
    }

    # senão ...
    return false;
}
</code></pre>

                        <p>Lembra que eu tinha proposto uma segunda solução?</p>
                        
                        <p> E que não fazia muito sentido porque não estavamos utilizando <strong>funções</strong> e para
                            piorar o <code>die()</code> apareceu sujando nosso código?</p>

                        <p>Com o uso de funções, a solução porposta faz mais sentido. Abaixo, eu rescrevi o código como
                            uma função, confira...</p>

                        <pre><code class="language-php">function eTriangulo($a, $b, $c) {
    if ($a > ($b + $c)) {
        return false;
    }
    if ($b > ($a + $c)) {
        return false;
    }
    if ($c > ($a + $b)) {
        return false;
    }

    return true;
}
</code></pre>

                        <p>Nas próximas matérias, veremos o básico de OOP e TDD e continuaremos com nosso código sobre
                            triângulos.</p>

                        <p>Após isso, estaremos habilitados para resolver os problemas de lógica com o apoio da técnica TDD.</p>


                    </div>
                    <?php
                    $core->paginacao->link_ativo = "/logica-de-programacao/basico/code-triangulo/";
                    $core->paginacao->descobrirAnteriorProxima($core->links[Core::SECAO_LOG]);
                    include BASE_PATH . VIEWS_PATH . "/paginacao.php";
                    ?>                    
                </div><!-- Corpo da matéria -->
            </div><!-- row -->

        </div><!-- Matéria -->

        <footer class="bs-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Lógica de Programação</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_LOG);
                        $core->lista->link_ativo = "/logica-de-programacao/basico/code-triangulo/";
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>
