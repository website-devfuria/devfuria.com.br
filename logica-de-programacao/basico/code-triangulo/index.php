<?php
/**
 * Exemplo de código que utiliza funções
 * funções, procedimentos, exemplo de funções
 */
require "../../../core/boot.php";
$pagina = $model->getPagina("/logica-de-programacao/basico/code-triangulo/");
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/head.php"; ?>
    </head>
    <body>
        <?php include BASE_PATH . VIEWS_PATH . "/familia01/nav-top.php"; ?>

        <!-- Título -->
        <div class="bs-header" id="content">
            <div class="container">
                <h1>Code - Triângulo</h1>
                <p>Código de exemplo ilustrando a utilização de funções</p>
            </div>
        </div>

        <!-- Linha abaixo do título -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/autor-data.php"; ?>

        <!-- Matéria -->
        <div class="container bs-docs-container">
            <div class="row">

                <div class="col-md-3">
                </div>

                <!-- Corpo da matéria -->
                <div class="col-md-9" role="main">


                    <div class="bs-docs-section">
                        <div class="page-header">
                            <h2 id="triangulo">Revisitando o código "é triangulo"</h2>
                        </div>

                        <p>
                            O último exercício da matéria
                            <?php Aux::printAncora("/logica-de-programacao/basico/exercicios-expressoes-condicionais/#05", "titulo") ?>
                            pede para identificarmos se os valores passados formam um triângulo.
                        </p>


                        <p>A utilização de <strong>funções</strong> para a solução do exercício "cai muito bem".</p>

                        <h3>A primeira solução</h3>

                        <p>O código abaixo é a primeira solução.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">
if ($a < ($b + $c)) {
    if ($b < ($a + $c)) {
        if ($c < ($a + $b)) {
            echo true;
        }
    }
}

# senão ...
echo false;</code></pre>
                        </div>


                        <p>...só que agora reescrita utilizando-se funções:</p>

                        <div class="code">
                            <h6>PHP</h6>
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
                        </div>


                        <h3>A segunda solução </h3>

                        <p>Lembra que eu tinha proposto uma segunda solução?</p>

                        <p> E que não fazia muito sentido porque não estavamos utilizando <strong>funções</strong> e para
                            piorar o <code>die()</code> apareceu sujando nosso código?</p>

                        <p>O código abaixo mostra como era a solução.</p>

                        <div class="code">
                            <h6>PHP</h6>
                            <pre><code class="language-php">
if ($a > ($b + $c)) {
    echo false;
    die();
}
if ($b > ($a + $c)) {
    echo false;
    die();
}
if ($c > ($a + $b)) {
    echo false;
    die();
}

echo true;</code></pre>
                        </div>

                        <p>Com o uso de funções, a solução proposta faz mais sentido. Abaixo, eu rescrevi o código como
                            uma função, confira...</p>

                        <div class="code">
                            <h6>PHP</h6>
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
                        </div>

                        <p>Nas próximas matérias, veremos o básico de OOP e TDD e continuaremos com nosso código sobre
                            triângulos.</p>

                        <p>Após isso, estaremos habilitados para resolver os problemas de lógica com o apoio da técnica TDD.</p>

                    </div>
                    <?php include BASE_PATH . VIEWS_PATH . "/paginacao.php"; ?>
                </div><!-- Corpo da matéria -->
            </div><!-- row -->
        </div><!-- Matéria -->
        <?php include BASE_PATH . VIEWS_PATH . "/cursos/footer.php"; ?>
        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>