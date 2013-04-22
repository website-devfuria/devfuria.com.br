<?php
defined('DF') or die;
$materias = $materia->getListaParcial();
?>
<div class="furia-tree parcial">
    <h5>Veja também...</h5>
    <h6>Nível <?php echo ucfirst($materia->nivel); ?></h6>
    <ul id="browser" class="filetree">
        <?php foreach($materias as $cada_materia): ?>
            <?php if(  (string)$materia->url ==  (string)$cada_materia->url   ): ?>
                <li><a><span class="file atual"><?php echo $cada_materia->titulo ?></span></a></li>
            <?php else: ?>
                <li>
                    <a href="<?php echo BASE_PATH.$cada_materia->url ?>" class="">
                        <span class="file">
                            <?php echo $cada_materia->titulo ?>
                        </span>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>