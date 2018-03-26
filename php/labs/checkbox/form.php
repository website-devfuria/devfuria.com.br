<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require "../inc-head.php" ?>
    </head>
    <body>
        <?php require "../inc-jumbo.php" ?>

        <div class="container">
            <form action="form-action.php" method="post">
                <p>
                    <input type="checkbox" name="bike" value="on">I have a bike
                </p>
                <p>
                    <input type="checkbox" name="car" value="on">I have a car
                </p>
                <p>
                    <input type="submit" value="Submit me!" />
                </p>
            </form>
            
<div class="language-html highlighter-rouge"><pre class="highlight"><code><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"pt-br"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;head&gt;</span>
        <span class="nt">&lt;title&gt;</span>Form de exemplo com checkboxes<span class="nt">&lt;/title&gt;</span>
        <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"utf-8"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/head&gt;</span>
    <span class="nt">&lt;body&gt;</span>
        <span class="nt">&lt;form</span> <span class="na">action=</span><span class="s">"form-action.php"</span> <span class="na">method=</span><span class="s">"post"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"bike"</span> <span class="na">value=</span><span class="s">"on"</span><span class="nt">&gt;</span>I have a bike
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"car"</span> <span class="na">value=</span><span class="s">"on"</span><span class="nt">&gt;</span>I have a car
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit me!"</span> <span class="nt">/&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/form&gt;</span>
    <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</code></pre>
</div>            
            
        </div>
    </body>
</html>