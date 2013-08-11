<html>
    <head>
        <style type="text/css">
            *{
                font-family: Verdana;
                font-size: 11px;
            }
            p.destacar{
                font-weight: bold;
                margin-top: 30px;

            }
        </style>
    </head>
    <body>

        <p>Sabe aquele array impresso no livro? todo formatado?</p>
        <p>Utilize as tags &lt;pre&gt;&lt;/pre&gt;</p>

        <p class="destacar">O código abaixo:</p>
<pre>
$arrayQQ = array("pri", "seg", "terc", "qua");
print_r($arrayQQ);
</pre>

        <p class="destacar">Gera o seguinte resultado...</p>
<pre>
<?php
$arrayQQ = array("pri", "seg", "terc", "qua");
print_r($arrayQQ);
?>
</pre>

        <p class="destacar">... dentro das tags &lt;pre&gt;&lt;/pre&gt;. Obviamente!</p>


    </body>
</html>
