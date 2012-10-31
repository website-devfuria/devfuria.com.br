<?php

/**
 * Seções para nevegação
 */
$secoes = array(
    "php"      => "PHP",
    "js"       => "Javascript",
    "html-css" => "HTML & CSS",
    "mysql"    => "MySql",
    "analise"  => "Análise",
);

?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-align-justify icon-white"></span>
            </a>

            <a class="brand" href="<?php echo ROOT_PATH; ?>">DevFuria</a>

            <div class="nav-collapse">
                <ul class="nav">
                <?php foreach($secoes as $secao_path => $secao_label): ?>
                    <li class="<?php echo ($secao_path == $nav_top['secao']) ? "active" : null ; ?>">
                        <a href="<?php echo BASE_PATH.$secao_path."/"; ?>"><?php echo $secao_label; ?></a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>

            <div class="btn-group direita visible-desktop" >
                <a class="btn dropdown-toggle btn-inverse btn-primary" data-toggle="dropdown" href="#">
                    Mais...
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASE_PATH; ?>mapa-do-site">mapa do site</a></li>
                    <li><a href="https://github.com/flaviomicheletti/devfuria">forke me on github</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>