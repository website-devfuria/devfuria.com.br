<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $page->front['title'] ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/app/assets/basico4/index.css" >
        <style>
            .wrapper {
                display: grid;
                grid-gap: 1px;
                grid-template-columns: 60% 40%;
            }
            .box {
            }
            .box.title{
                background-color: #f8f8ff;
                text-align: center;
                line-height: 2em
            }
            .box.body {
                background-color: #f5fffa;
                padding: 10px;
                overflow: auto;
            }
            .box.body.result {
                text-align: center;
            }
            pre {
                margin: 0px;
            }
            code {
            }
            pre code {
                line-height: 1.5em;
            }
        </style>
    </head>
    <body>
        <h1><?php echo $page->front['title'] ?></h1>
        <hr />
        <?php echo $content ?>
    </body>
</html>

