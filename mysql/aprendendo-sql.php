<?php
/**
 * index MYSQL
 */
/**
 * Includes
 */
require "../core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head->setTitle('aprendendo sql');
        $core->head->setDescription('Aprenda sql de uma forma que você nunca viu. Material altamente organizado e de qualidade impecável.');
        $core->head->setkeywords("aprendendo sql; matérias sobre sql;");
        $core->head->setAuthor();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
        
        <link rel="canonical" href="<?php echo LINKS_PATH; ?>/mysql/" />
        <style type="text/css">
            h1 {
                font-weight: bolder;
                color: #2F4F4F
            }
        </style>

    </head>

    <body>
        <?php
        $core->navtop->secao_ativa = Core::SECAO_MYSQL;
        include BASE_PATH . VIEWS_PATH . "/nav-top.php";
        ?>
        <!-- Page content of course! -->
        <main class="bs-masthead" id="content" role="main">
            <div class="container">
                <h1>Aprendedo SQL</h1>
                <p class="lead">Curso de Mysql e SQL</p>
                <p>Eu estava na dúvida se fazia um curso apenas de SQL ou se envolvia um Banco de Dados.</p>
                <p>É certo que a SQL é um padrão (ou pelo menos deveria ser) e que indepênde de banco de dados, mas por outro lado, como aprender SQL sem ao menos um banco de dados?</p>

                <p>Minha escolha pelo MySql é óbvia: é um DB "pau para toda obra", é o companheiro inseparável do PHP e é muito fácil começar por ele.</p>

                <p><strong>Se o curso é sobre SQL porque chama-se Mysql?</strong></p>

                <p>É porque eu não gostaria que alguém que estivesse procurando por SQL, entra-se no curso achando que vai aprender apenas SQL e na verdade irá aprender SQL juntamente com o MySql. Pode parecer bobagem mas eu quis tomar esse cuidado.</p>

                <p>Esse é um curso de SQL através do MySql.</p>
            </div>
        </main>

        <div class="" style="background-color: #FFF; padding:   0px 0px;" id="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Mysql-SQL</h1>
                        <?php
                        $core->lista->setLinks($core->links, Core::SECAO_MYSQL);
                        include BASE_PATH . VIEWS_PATH . "/lista-secao.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
    </body>
</html>