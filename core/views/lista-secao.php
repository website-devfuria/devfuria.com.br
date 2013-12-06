<?php
$interator = 1;
?>

<div class="list-group">
    <?php foreach ($core->lista->links as $path => $titulo): ?>
        <a href="<?php echo $path ?>" class="list-group-item <?php echo (strstr($path, $core->lista->link_ativo)) ? "active" : null; ?>">
            <?php echo "$interator) " . $titulo ?>
        </a>
        <?php $interator++; ?>
    <?php endforeach; ?>
</div>