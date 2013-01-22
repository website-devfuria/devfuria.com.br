<?php
/**
 * HOME
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title><?php echo DOMINIO; ?></title>
        <?php
        $head_meta = array(
            "description" => "Cursos, artigos e matérias sobre desenvolvimento web de alta qualidade",
            "keywords" =>  KEYWORDS_PAD . KEYWORDS_TEC
        );
        include BASE_PATH.COMPONENTES_PATH."head_meta.php";
        ?>
        <?php include BASE_PATH.COMPONENTES_PATH."head_links_css.php"; ?>
        <link href="<?php echo BASE_PATH; ?>index.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="respiro-em-baixo">
        <?php
        $nav_top['secao'] = null;
        include BASE_PATH.COMPONENTES_PATH."nav_top.php";
        ?>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <header>
                            <?php include BASE_PATH.COMPONENTES_PATH."google_search.php"; ?>
                    </header>
                    <div class="furia-lista-materias">
                        <?php
                        $order    = "ORDER BY secao, ordem";
                        $where    = "";
                        $materias = Materia::getObjects($where, $order);
                        ?>
                        <?php foreach($materias as $materia): ?>
                            <div class="materia-resumo lista-<?php echo $materia->secao; ?>">
                                <a href="<?php echo BASE_PATH.$materia->url ?>">
                                    <em><?php echo $materia->titulo; ?></em>
                                    <span class="resumo">
                                        <?php echo $materia->resumo; ?> (continuar lendo)
                                    </span>
                                    <span class="hidden-phone assinatura">
                                        <?php echo $materia->autor; ?>,
                                        atualizado em <?php echo FuncAux::data_converte_para_visualizar( $materia->dt_atualizacao ); ?>,
                                        escrito em <?php echo FuncAux::data_converte_para_visualizar( $materia->dt_criacao ); ?>.
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php include BASE_PATH.COMPONENTES_PATH."face_botao_curtir.php"; ?>
                </div><!-- span12 -->
            </div><!-- row -->
        </div><!-- container -->
    <?php include BASE_PATH.COMPONENTES_PATH."rodape_js.php"; ?>
    </body>
</html>