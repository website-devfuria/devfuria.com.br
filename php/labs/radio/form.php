<?php

#
# Aqui teríamos algum código para recuperar de uma fonte de dados
# as informações do formulário.
#
# Utilizaremos o código abaixo, apenas como fins ilustrativo,
# imaginando que ele vem de alguma fonte.
#
$bandRock = "pink-floyd";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require "../inc-head.php" ?>
    </head>
    <body>
        <?php require "../inc-jumbo.php" ?>

        <div class="container">
            <form action="form-action.php" method="post">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio"
                               name="band-rock"
                               value="beatles"
                               class="form-check-input"
                               <?php echo ($bandRock == "beatles") ? "checked" : null; ?>/> The Beatles
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio"
                               name="band-rock"
                               value="led-zeppelin"
                               class="form-check-input"
                               <?php echo ($bandRock == "led-zeppelin") ? "checked" : null; ?>/> Led Zeppelin
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio"
                               name="band-rock"
                               value="pink-floyd"
                               class="form-check-input"
                               <?php echo ($bandRock == "pink-floyd") ? "checked" : null; ?>/> Pink Floy
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit me!" class="btn btn-default"/>
                </div>
            </form>


<div class="language-html highlighter-rouge"><pre class="highlight"><code><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"pt-br"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;head&gt;</span>
        <span class="nt">&lt;title&gt;</span>Form de exemplo com radios<span class="nt">&lt;/title&gt;</span>
        <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/head&gt;</span>
    <span class="nt">&lt;body&gt;</span>
        <span class="nt">&lt;form</span> <span class="na">action=</span><span class="s">"form-action.php"</span> <span class="na">method=</span><span class="s">"post"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"band-rock"</span> <span class="na">value=</span><span class="s">"beatles"</span><span class="nt">/&gt;</span>The Beatles
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"band-rock"</span> <span class="na">value=</span><span class="s">"led-zeppelin"</span><span class="nt">/&gt;</span> Led Zeppelin
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span> <span class="na">name=</span><span class="s">"band-rock"</span> <span class="na">value=</span><span class="s">"pink-floyd"</span><span class="nt">/&gt;</span>Pink Floy
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">value=</span><span class="s">"Submit me!"</span> <span class="nt">/&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/form&gt;</span>
        <span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span> <span class="na">src=</span><span class="s">"radios.js"</span><span class="nt">&gt;&lt;/script&gt;</span>
    <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</code></pre>
</div>            
            
            
        </div>

    </body>
</html>