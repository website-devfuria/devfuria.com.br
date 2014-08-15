<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            body {
                background: #eeeeee;
            }
            canvas {
                background: #ffffff;
                cursor: pointer;
                margin-left: 10px;
                margin-top: 10px;
                -webkit-box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
                -moz-box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
                box-shadow: 4px 4px 8px rgba(0,0,0,0.5);
            }
        </style>
    </head>
    <body>
        <canvas id='myCanvas' width='300' height='150'>
            Canvas not supported
        </canvas>
        <!--<script src="drawGrid.js"></script>-->
        <script>
            var canvas = document.getElementById('myCanvas');
            var context = canvas.getContext('2d');
//            drawGrid(context, 'lightgray', 30, 30);
        </script>
        <?php if(isset($_GET['arq'])): ?>
            <script src="<?php echo $_GET['arq'] ?>.js"></script>
        <?php endif?>
    </body>
</html>
