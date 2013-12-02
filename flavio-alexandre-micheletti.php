<?php
/**
 * HOME, index do site
 */

/**
 * Includes
 */
require "core/boot.php";
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php
        $core->head = new Head();
        include BASE_PATH . VIEWS_PATH . "/head.php";
        ?>
    </head>
    <body>
        <p>
            Analista e Programador desde 2006.
        </p>
            
        
<div class="row">
  <div class="col-sm-6 col-md-3">
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" alt="...">
    </a>
  </div>
  ...
</div>
        
        

    <?php include BASE_PATH . VIEWS_PATH . "/footer-js.php"; ?>
</body>
</html>