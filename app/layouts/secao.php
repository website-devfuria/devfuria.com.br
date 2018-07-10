<!DOCTYPE html>
<html>
  <head>

    <?php include(Site::$path['includes/'] . "head.php") ?>
    <?php include(Site::$path['/'] . "/app/assets/boots3/include-css.php") ?>

  </head>
  <body data-spy="scroll" data-target="#toc">

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include(Site::$path['includes/'] . "bread-crumb.php") ?>
        </div>
      </div>
    </div>

    <article class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="page-header text-center">
              <h1><?php echo $page->front['title'] ?> <br /><small><?php echo (isset($page->front['description'])) ? $page->front['description']: null; ?></small></h1>
            </div>
            <?php echo $content ?>
        </div>
      </div>
    </article>

    <?php include(Site::$path['includes/'] . "footer.php") ?>
    <?php include(Site::$path['includes/'] . "footer-js.php") ?>

  </body>
</html>
