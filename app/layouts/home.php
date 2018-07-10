<!DOCTYPE html>
<html>
  <head>

    <?php include(Site::$path['includes/'] . "head.php") ?>
    <?php include(Site::$path['includes/'] . "head-og.php") ?>
    <?php include(Site::$path['/'] . "/app/assets/clean/include-css.php") ?>

  </head>
  <body>
        <!-- Preloader -->
        <div id="preloader"><div id="status"></div></div>

        <?php echo $content ?>

        <?php include(Site::$path['includes/'] . "footer.php") ?>
        <?php include(Site::$path['includes/'] . "footer-js.php") ?>
        <?php include(Site::$path['/'] . "/app/assets/clean/include-js.php") ?>

    </body>
</html>