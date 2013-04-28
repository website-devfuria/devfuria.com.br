<?php
defined('DF') or die;
$materias = Materia::getObjects($lista_materias['secao']);
?>

                        <?php foreach($materias as $materia): ?>
                            <div class="materia-resumo lista-<?php echo $lista_materias['secao']; ?>">
                                <a href="<?php echo LINKS_PATH.$materia->url ?>">
                                    <em><?php echo $materia->titulo; ?></em>
                                    <span class="resumo">
                                        <?php echo $materia->resumo; ?> (continuar lendo)
                                    </span>
                                    <span class="hidden-phone assinatura">
                                        <?php echo $materia->autor; ?>,
                                        atualizado em <?php echo $materia->dt_atualizacao; ?>,
                                        escrito em <?php echo $materia->dt_criacao; ?>.
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>
