<?php
$where    = "WHERE secao = '{$materia->secao}' AND nivel = '{$materia->nivel}' ";
$materias = Materia::getObjects($where);
?>
<div class="furia-tree parcial">
    <h5>Veja também...</h5>
    <h6>Nível <?php echo ucfirst($materia->nivel); ?></h6>
    <ul id="browser" class="filetree">
        <?php foreach($materias as $cada_materia): ?>
            <?php if($materia->id == $cada_materia->id): ?>
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