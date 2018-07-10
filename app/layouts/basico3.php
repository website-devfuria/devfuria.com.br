<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $page->front['title'] ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/app/assets/basico3/highlight.css" >
        <link rel="stylesheet" href="/app/assets/basico3/index.css" >
    </head>
    <body>
        <h1><?php echo $page->front['title'] ?></h1>
        <hr />
        <?php echo $content ?>
    </body>
</html>

