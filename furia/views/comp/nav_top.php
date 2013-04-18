<?php
defined('DF') or die;

/**
 * Seções para nevegação
 */
$secoes = array(
    "php"      => "PHP",
    "js"       => "Javascript",
    "html-css" => "HTML & CSS"
);

/**
 * Assinala o menu conforme a seção da matéria
 */
if( isset($materia) ){
    $nav_top['secao'] = $materia->secao;
}

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

        </div>
    </div>
</div>