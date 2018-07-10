<?php

# Aqui teríamos algum código para recuperar de uma fonte de dados
# as informações do formulário.
#
# Utilizaremos o código abaixo, apenas como fins ilustrativo,
# imaginando que ele vem de alguma fonte.
$author   = "Tom Jobim";
$email    = "tom@jobim.com";
$pass     = "1234";
$comments = "algum texto";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require "../inc-head.php" ?>
    </head>
    <body>
        <?php require "../inc-jumbo.php" ?>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <form action="form-action.php" method="post">
                        <div class="form-group">
                            <label for="ex1">Name</label>
                            <input type="text" name="author" class="form-control" id="ex1" value="<?php echo $author; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ex2">Email address</label>
                            <input type="email" name="email" class="form-control" id="ex2" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ex3">Password</label>
                            <input type="Password" name="pass" class="form-control" id="ex3" value="<?php echo $pass; ?>">
                        </div>
                        <div class="form-group">
                            <label for="ex4">Comments</label>
                            <textarea name="comments" class="form-control" id="ex4" rows="3"><?php echo $comments; ?></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Submit me!" class="btn btn-default"/>
                        </div>
                    </form>
                </div>
                <div class="col-sm-8">
<div class="language-php highlighter-rouge"><pre class="highlight"><code><span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html</span> <span class="na">lang=</span><span class="s">"pt-br"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;head&gt;</span>
        <span class="nt">&lt;title&gt;</span>Exemplo devfuria<span class="nt">&lt;/title&gt;</span>
        <span class="nt">&lt;meta</span> <span class="na">http-equiv=</span><span class="s">"Content-Type"</span> <span class="na">content=</span><span class="s">"text/html; charset=utf-8"</span> <span class="nt">/&gt;</span>
    <span class="nt">&lt;/head&gt;</span>
    <span class="nt">&lt;body&gt;</span>

        <span class="nt">&lt;form</span> <span class="na">id=</span><span class="s">"comments_form"</span> <span class="na">action=</span><span class="s">"form-action.php"</span> <span class="na">method=</span><span class="s">"post"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"author"</span><span class="nt">&gt;</span>Name: <span class="nt">&lt;em</span> <span class="na">class=</span><span class="s">"required"</span><span class="nt">&gt;</span>(Required)<span class="nt">&lt;/em&gt;&lt;/label&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"author"</span> <span class="na">id=</span><span class="s">"author"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$author</span><span class="p">;</span> <span class="cp">?&gt;</span><span class="s">"</span> <span class="nt">/&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"email"</span><span class="nt">&gt;</span>Email Address:<span class="nt">&lt;/label&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"email"</span> <span class="na">id=</span><span class="s">"email"</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">value=</span><span class="s">"</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$email</span><span class="p">;</span> <span class="cp">?&gt;</span><span class="s">"</span> <span class="nt">/&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"pass"</span><span class="nt">&gt;</span>Password:<span class="nt">&lt;/label&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">name=</span><span class="s">"pass"</span> <span class="na">id=</span><span class="s">"pass"</span> <span class="na">type=</span><span class="s">"password"</span> <span class="na">value=</span><span class="s">"</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$pass</span><span class="p">;</span> <span class="cp">?&gt;</span><span class="s">"</span> <span class="nt">/&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"text"</span><span class="nt">&gt;</span>Message: <span class="nt">&lt;em</span> <span class="na">class=</span><span class="s">"required"</span><span class="nt">&gt;</span>(Required)<span class="nt">&lt;/em&gt;&lt;/label&gt;</span>
                <span class="nt">&lt;textarea</span> <span class="na">name=</span><span class="s">"text"</span> <span class="na">id=</span><span class="s">"text"</span> <span class="na">cols=</span><span class="s">"20"</span> <span class="na">rows=</span><span class="s">"10"</span><span class="nt">&gt;</span><span class="cp">&lt;?php</span> <span class="k">echo</span> <span class="nv">$text</span><span class="p">;</span> <span class="cp">?&gt;</span><span class="nt">&lt;/textarea&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
            <span class="nt">&lt;p&gt;</span>
              <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit!"</span> <span class="nt">/&gt;</span>
            <span class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;/form&gt;</span>

    <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
</code></pre></div>
                </div>
            </div>  
        </div>        

    </body>
</html>